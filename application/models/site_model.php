<?php

	class site_model extends CI_Model{

		protected $id;
		protected $name;
		protected $band;
		protected $sector;
		protected $technology;

		public function __construct(){

		}

		public function getId(){return $this->id;}

		public function setId($id){$this->id = $id;}

    public function getName(){return $this->name;}

    public function setName($name){$this->name = $name;}

    public function getBand(){return $this->band;}

		public function setBand($band){$this->band = $band;}

    public function getSector(){return $this->sector;}

		public function setSector($sector){$this->sector = $sector;}

    public function getTechnology(){return $this->technology;}

		public function setTechnology($technology){$this->technology = $technology;}


		public function createSite($id, $name, $band, $sector, $technology){
      $this->setId($id);
			$this->setName($name);
			$this->setBand($band);
			$this->setSector($sector);
			$this->setTechnology($technology);
    }
	}
?>
