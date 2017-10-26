<?php

	class work_model extends CI_Model{

		protected $id;
		protected $name;
		protected $precheck;
		protected $block12h;
		protected $block24h;
		protected $block36h;

		public function __construct(){

		}

		public function getId(){return $this->id;}

		public function setId($id){$this->id = $id;}

    public function getName(){return $this->name;}

    public function setName($name){$this->name = $name;}

    public function getPrecheck(){return $this->precheck;}

		public function setPrecheck($precheck){$this->precheck = $precheck;}

    public function getBlock12h(){return $this->block12h;}

		public function setBlock12h($block12h){$this->block12h = $block12h;}

    public function getBlock24h(){return $this->block24h;}

		public function setBlock24h($block24h){$this->block24h = $block24h;}

    public function getBlock36h(){return $this->block36h;}

		public function setBlock36h($block36h){$this->block36h = $block36h;}


		public function createWork($id, $name, $precheck, $block12h, $block24h, $block36h){
      $this->setId($id);
			$this->setName($name);
			$this->setPrecheck($precheck);
			$this->setBlock12h($block12h);
			$this->setBlock24h($block24h);
			$this->setBlock36h($block36h);
    }
	}
?>
