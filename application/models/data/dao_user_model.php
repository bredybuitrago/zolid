<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class dao_user_model extends CI_Model {

    protected $session;

    public function __construct() {
        $this->load->model('data/configdb_model');
        $this->load->model('user_model');
//        //Se instancia la conexión...
        $temp = new configdb_model();
        $this->session = $temp->openSession();
    }

    /**
     * Retornará la lista de registros de la tabla usuarios...
     * @author John Vanegas - ZTE
     */
    public function getAllUsers() {
        $sql = "SELECT * FROM User";
        $response = array();
        if ($this->session != "false") {
            $result = $this->session->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $eng = new user_model;
                    $eng->createUser($row['K_ID_USER'], $row['N_NAME_USER'], $row['N_LASTNAME_USER'], $row['N_MAIL_USER'], $row['N_PHONE_USER'], $row['N_CELLPHONE_USER']);
                    $permissions = $this->getPermissions($row['K_ID_USER']);
                    $eng->setPermissions($permissions);
                    $response[] = $eng;
                }
            } else {

            }
        }
    }

    public function getAll(){
      return DB::table("user")->get();
    }

    /**
     * Consulta los permisos de un usuario en especifico...
     * @param type $idUser
     */
    private function getPermissions($idUser) {

    }

}
