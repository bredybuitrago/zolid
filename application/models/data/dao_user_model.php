<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class dao_user_model extends CI_Model {

    protected $session;

    public function __construct() {
        $this->load->model('dto/User');
    }

    /**

    */
    public function insert($request){
      $response = null;
      $db = new DB();
      try{
        $user = new User();
        $request->K_ID_USER = $user->getLastId();
        $user->insert($request->all());
        //Insertar permisos...
        $response = new Response(EMessages::INSERT);
      }catch(ZolidException $ex){
         $response = $ex;         
      }
      return $response;
    }


}
