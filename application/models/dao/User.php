<?php

class User extends Model {

    protected $K_ID_USER;
    protected $N_NAME_USER;
    protected $N_LASTNAME_USER;
    protected $N_MAIL_USER;
    protected $N_PHONE_USER;
    protected $N_CELLPHONE_USER;
    protected $permises;
    //Los campos que desea ocultar para que no se reflejen en la vista.
    protected $table = "user";
    //Los campos que desea exculir del modelo.
    protected $exclude = ["hidden", "exclude", "table", "class", "db", "__data", "permises"];

    public function __construct($properties = null) {
        parent::__construct($properties);
        $this->class = get_class($this);
    }

    public function setId($K_ID_USER) {
        $this->K_ID_USER = $K_ID_USER;
    }

    public function getId() {
        return $this->K_ID_USER;
    }

    public function setName($N_NAME_USER) {
        $this->N_NAME_USER = $N_NAME_USER;
    }

    public function getName() {
        return $this->N_NAME_USER;
    }

    public function setLastName($N_LASTNAME_USER) {
        $this->N_LASTNAME_USER = $N_LASTNAME_USER;
    }

    public function getLastName() {
        return $this->N_LASTNAME_USER;
    }

    public function setMail($N_MAIL_USER) {
        $this->N_MAIL_USER = $N_MAIL_USER;
    }

    public function getMail() {
        return $this->N_MAIL_USER;
    }

    public function setPhone($N_PHONE_USER) {
        $this->N_PHONE_USER = $N_PHONE_USER;
    }

    public function getPhone() {
        return $this->N_PHONE_USER;
    }

    public function setCellphone($N_CELLPHONE_USER) {
        $this->N_CELLPHONE_USER = $N_CELLPHONE_USER;
    }

    public function getCellphone() {
        return $this->N_CELLPHONE_USER;
    }

    public function setPermises($permises){
      $this->permises =  $permises;
    }

    public function getPermises(){
      return $this->permises;
    }

}
