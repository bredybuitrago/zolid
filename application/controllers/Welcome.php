<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('dao/User');
    }

    public function index() {
      try{        
        $user = new User();
        $this->request->K_ID_USER = $user->getLastId();
        $user->insert($this->request->all());
        $this->json(new Response(EMessages::SUCCESS));
      }catch(ZolidException $ex){
         $this->json($ex);
      }
    }
}
