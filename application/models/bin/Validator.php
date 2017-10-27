<?php

class Validator extends Request {

    private $errors;
    private $messages;
    private $messagesInit;
    private $errorsKeys;

    public function __construct($errorsKeys = null) {
        $this->errorsKeys = (isset($errorsKeys)) ? $errorsKeys : true;
        $this->messagesInit = [
            "required" => "El campo __FIELD__ es requerido",
            "unique" => "Ya existe un registro para el mismo campo (__FIELD__).",
            "email" => "El email es inválido"
        ];
    }

    public function make($request, $validations, $messages = null) {
        parent::__construct($request);
        $values = $this->all();
        $this->messages = isset($messages) ? $messages : $this->messages;
        //Recorremos los campos que tenemos que validar.
        foreach ($validations as $key => $validate) {
            //Obtenemos el campo.
            $parts = explode(".", $key);
            if (count($parts) == 1) {
                $this->validateField($key, $values[$key], $validate);
            } else {
                $value = $this;
                foreach ($parts as $part) {
                    $value = $value->{$part};
                }
                $this->validateField($key, $value, $validate);
            }
        }
    }

    private function validateField($field, $value, $validations) {
        $actions = explode("|", $validations);
        foreach ($actions as $action) {
            $this->validate($field, $value, $action);
        }
    }

    private function validate($field, $value, $action) {
        $action = explode(":", $action);
        $table = (count($action) == 2) ? $action[1] : NULL;
        $action = $action[0];
        switch ($action) {
            case "required":
                $this->required($field, $value);
                break;
            case "email":
                $this->email($field, $value);
                break;
            case "unique":
                $this->unique($table, $field, $value);
                break;
        }
    }

    public function required($field, $value, $messages = null) {
        $rtn = isset($value) ? (trim($value) != "") : false;
        $messages = (count($messages) == 0) ? $this->messages : $messages;
        if (!$rtn && is_array($messages)) {
            $this->errors[] = $this->getError($field, "required", $messages);
        }
        return $rtn;
    }

    public function email($field, $value, $messages = null) {
        $rtn = isset($value) ? filter_var($value, FILTER_VALIDATE_EMAIL) : false;
        $messages = (count($messages) == 0) ? $this->messages : $messages;
        if (!$rtn && is_array($messages)) {
            $this->errors[] = $this->getError($field, "email", $messages);
        }
        return $rtn;
    }

    public function url($field, $value, $messages = null) {
        $rtn = isset($value) ? filter_var($value, FILTER_VALIDATE_EMAIL) : false;
        $messages = (count($messages) == 0) ? $this->messages : $messages;
        if (!$rtn && is_array($messages)) {
            $this->errors[] = $this->getError($field, "url", $messages);
        }
        return $rtn;
    }

    /**
     *
     * @param String $table
     * @param String $field
     * @param String $value
     * @param Array $messages
     * @return Boolean
     */
    public function unique($table, $field, $value, $messages = null) {
        $db = new DB();
        $num = $db->select("SELECT * FROM $table WHERE $field = \"$value\"")->count();
        $rtn = ($num == 0);
        $messages = (count($messages) == 0) ? $this->messages : $messages;
        if (!$rtn) {
            $this->errors[] = $this->getError($field, "unique", $messages);
        }
        return $rtn;
    }

    private function getError($field, $action, $messages) {
        if ($this->errorsKeys) {
            $rtn = isset($messages["$field.$action"]) ? ["$field.$action" => $messages["$field.$action"]] : ["$field.$action" => $this->getMessage($field, $action)];
        } else {
            $rtn = isset($messages["$field.$action"]) ? $messages["$field.$action"] : $this->getMessage($field, $action);
        }
        return $rtn;
    }

    private function getMessage($field, $action) {
        return str_replace("__FIELD__", $field, $this->messagesInit[$action]);
    }

    public function fails() {
        return (is_array($this->errors)) && (count($this->errors) > 0);
    }

    function getErrors() {
        return $this->errors;
    }

    function existError($keyName) {
        if (!is_array($this->errors)) {
            return false;
        }
        foreach ($this->errors as $key => $value) {
            if ($key == $keyName) {
                return true;
            }
        }
        return false;
    }

}
