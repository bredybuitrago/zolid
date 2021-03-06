<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Crud {

    protected $class;
    protected $__data;
    private $db;

    public function select(...$params) {
        $this->init();
        $this->db->select($params);
        return $this;
    }

    public function join($tablereference, $field, $condition, $field2) {
        $this->init();
        $this->db->join($tablereference, $field, $condition, $field2);
        return $this;
    }

    public function where($key, $condition, $value) {
        $this->init();
        $this->db->where($key, $condition, $value);
        return $this;
    }

    public function orWhere($key, $condition, $value) {
        $this->init();
        $this->db->orWhere($key, $condition, $value);
        return $this;
    }

    public function limit($limit = 0, $limit2 = 0) {
        $this->init();
        $this->db->limit($limit, $limit2);
        return $this;
    }

    public function orderBy($key, $order) {
        $this->init();
        $this->db->orderBy($key, $order);
        return $this;
    }

    public function first() {
        $this->init();
        return $this->db->first();
    }

    public function count() {
        $this->init();
        return $this->db->count();
    }

    public function getLastId() {
       $this->init();
       return $this->db->count() + 1;
    }


    public function get() {
        $this->init();
        return $this->db->get();
    }

    public function listAll() {
        return $this->get();
    }

    private function getObj() {
        try {
            $model = $this->getAttributes();
            $obj = [];
            foreach ($model as $key => $value) {
                $obj[$value] = $this->{$value};
            }
            return $obj;
        } catch (Exception $exc) {
            return null;
        }
    }

    public function save() {
        return $this->insert();
    }

    public function insert($obj = null) {
        if (empty($obj)) {
            $obj = $this->getObj();
        } else {
            $obj = $this->parse($obj);
        }
        $this->init();
        try {
            $id = $this->db->insert($obj);
            $response = new Response(EMessages::INSERT);
            $response->setData($id);
            return $response;
        } catch (Exception $exc) {
            return new Response(EMessages::ERROR_INSERT);
        }
    }

    /**
     *
     * @param type $obj
     * @return boolean ? $update
     * @throws type DeplynException
     */
    public function update($obj) {
        if (empty($obj)) {
            $obj = $this->getObj();
        } else {
            $obj = $this->parse($obj);
        }
        $this->init();
        try {
            $this->db->update($obj);
            $response = new Response(EMessages::UPDATE);
            return $response;
        } catch (Exception $exc) {
            throw (new DeplynException(EMessages::ERROR_UPDATE))
                    ->setOriginalMessage($exc->getMessage());
        }
    }

    /**
     *
     * @param array $wheres
     * @return boolean ? $delete
     * @throws DeplynException
     */
    public function delete() {
        $this->init();
        try {
            $this->db->delete();
            $response = new Response(EMessages::DELETE);
            return $response;
        } catch (Exception $exc) {
            throw (new DeplynException(EMessages::ERROR_UPDATE))
                    ->setOriginalMessage($exc->getMessage());
        }
    }

    public function init() {
        if (empty($this->db)) {
            $this->db = new DB($this->table);
        }
    }

    public function setTransaction($db){
      $this->db = $db;
      $this->db->setTable($this->table);
    }

}
