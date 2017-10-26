<?php

	class incident_model extends CI_Model{

		protected $id;
    protected $it;
    protected $status;
    protected $description;
    protected $dateStart;
    protected $dateFinish;
    protected $duration;
    protected $name;

		public function __construct(){

		}

		public function getId(){return $this->id;}

		public function setId($id){$this->id = $id;}

    public function getIt(){return $this->it;}

		public function setIt($it){$this->it = $it;}

    public function getStatus(){return $this->status;}

		public function setStatus($status){$this->status = $status;}

    public function getDescription(){return $this->description;}

		public function setDescription($description){$this->description = $description;}

    public function getDateStart(){return $this->dateStart;}

		public function setDateStart($dateStart){$this->dateStart = $dateStart;}

    public function getDateFinish(){return $this->dateFinish;}

		public function setDateFinish($dateFinish){$this->dateFinish = $dateFinish;}

    public function getDuration(){return $this->duration;}

		public function setDuration($duration){$this->duration = $duration;}

    public function getName(){return $this->name;}

    public function setName($name){$this->name = $name;}

		public function createIncident($id, $it, $status, $description, $dateStart, $dateFinish, $duration, $name){
      $this->setId($id);
      $this->setIt($it);
      $this->setStatus($status);
      $this->setDescription($description);
      $this->setDateStart($dateStart);
      $this->setDateFinish($dateFinish);
      $this->setDuration($duration);
			$this->setName($name);
    }
	}
?>
