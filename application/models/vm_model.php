<?php

	class vm_model extends CI_Model{

		protected $id;
		protected $idSiteAcces;
		protected $claroResponsable;
		protected $week;
		protected $techAffected;
		protected $bandAffected;
		protected $dateExecution;
		protected $dateStartP;
		protected $dateFinishP;
		protected $dateStartR;
		protected $dateFinishR;
		protected $contractor;
    protected $stage;
		protected $regionalCluster;
		protected $status;
		protected $substatus;
		protected $failure;

		public function __construct(){

		}

		public function getId(){return $this->id;}

		public function setId($id){$this->id = $id;}

		public function getIdSiteAcces(){return $this->idSiteAcces;}

		public function setIdSiteAcces($idSiteAcces){$this->idSiteAcces = $idSiteAcces;}

		public function getClaroResponsable(){return $this->claroResponsable;}

		public function setClaroResponsable($claroResponsable){$this->claroResponsable = $claroResponsable;}

		public function getWeek(){return $this->week;}

		public function setWeek($week){$this->week = $week;}

		public function getTechAffected(){return $this->techAffected;}

		public function setTechAffected($techAffected){$this->techAffected = $techAffected;}

		public function getBandAffected(){return $this->bandAffected;}

		public function setBandAffected($bandAffected){$this->bandAffected = $bandAffected;}

		public function getDateExecution(){return $this->dateExecution;}

		public function setDateExecution($dateExecution){$this->dateExecution = $dateExecution;}

		public function getDateStartP(){return $this->dateStartP;}

		public function setDateStartP($dateStartP){$this->dateStartP = $dateStartP;}

		public function getDateFinishP(){return $this->dateFinishP;}

		public function setDateFinishP($dateFinishP){$this->dateFinishP = $dateFinishP;}

    public function getDateStartR(){return $this->dateStartR;}

    public function setDateStartR($dateStartR){$this->dateStartR = $dateStartR;}

    public function getDateFinishR(){return $this->dateFinishR;}

    public function setDateFinishR($dateFinishR){$this->dateFinishR = $dateFinishR;}

		public function getContractor(){return $this->contractor;}

		public function setContractor($contractor){$this->contractor = $contractor;}

		public function getStage(){return $this->stage;}

		public function setStage($stage){$this->stage = $stage;}

		public function getRegionalCluster(){return $this->regionalCluster;}

		public function setRegionalCluster($regionalCluster){$this->regionalCluster = $regionalCluster;}

		public function getStatus(){return $this->status;}

		public function setStatus($status){$this->status = $status;}

    public function getSubstatus(){return $this->substatus;}

    public function setSubstatus($substatus){$this->substatus = $substatus;}

    public function getFailure(){return $this->failure;}

		public function setFailure($failure){$this->failure = $failure;}



		public function createSite( $id, $idSiteAcces, $claroResponsable, $week, $techAffected, $bandAffected, $dateExecution, $dateStartP, $dateFinishP, $dateStartR, $dateFinishR, $contractor, $stage, $regionalCluster, $status, $substatus, $failure){
      $this->setId($id);
      $this->setIdSiteAcces($idSiteAcces);
      $this->setClaroResponsable($claroResponsable);
      $this->setWeek($week);
      $this->setTechAffected($techAffected);
      $this->setBandAffected($bandAffected);
      $this->setDateExecution($dateExecution);
      $this->setDateStartP($dateStartP);
      $this->setDateFinishP($dateFinishP);
      $this->setDateStartR($dateStartR);
      $this->setDateFinishR($dateFinishR);
      $this->setContractor($contractor);
      $this->setStage($stage);
			$this->setRegionalCluster($regionalCluster);
			$this->setStatus($status);
			$this->setSubstatus($substatus);
			$this->setFailure($failure);
    }
	}
?>
