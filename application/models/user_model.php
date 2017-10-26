<?php

	class user_model extends CI_Model{

		protected $id;
		protected $name;
		protected $lastname;
		protected $mail;
		protected $phone;
		protected $cellphone;
		protected $permission;

		public function __construct(){

		}

		public function getId(){return $this->id;}

		public function setId($id){$this->id = $id;}

    public function getName(){return $this->name;}

    public function setName($name){$this->name = $name;}

    public function getLastname(){return $this->lastname;}

		public function setLastname($lastname){$this->lastname = $lastname;}

    public function getMail(){return $this->mail;}

		public function setMail($mail){$this->mail = $mail;}

    public function getPhone(){return $this->phone;}

		public function setPhone($phone){$this->phone = $phone;}

    public function getCellphone(){return $this->cellphone;}

		public function setCellphone($cellphone){$this->cellphone = $cellphone;}

    public function getPermission(){return $this->permission;}

		public function setPermission($permission){$this->permission = $permission;}


		public function createUser($id, $name, $lastname, $mail, $phone, $cellphone, $permission){
      $this->setId($id);
			$this->setName($name);
			$this->setLastname($lastname);
			$this->setMail($mail);
			$this->setPhone($phone);
			$this->setCellphone($cellphone);
			$this->setPermission($permission);
    }
	}
	}
	}
?>
