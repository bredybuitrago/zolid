<?php

	class incident_model extends CI_Model{

		protected $id;
    protected $status;
    protected $description;
    protected $dateStart;
    protected $dateFinish;
    protected $duration;
    protected $type;

		public function __construct(){

		}

		public function getId(){return $this->id;}

		public function setId($id){$this->id = $id;}

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

    public function getType(){return $this->type;}

    public function setType($Type){$this->type = $type;}



		public function createIncident($id, $status, $description, $dateStart, $dateFinish, $duration, $type){
      $this->setId($id);
      $this->setStatus($status);
      $this->setDescription($description);
      $this->setDateStart($dateStart);
      $this->setDateFinish($dateFinish);
      $this->setDuration($duration);
      $this->setType($type);
    }
	}
?>
