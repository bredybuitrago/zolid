<?php

class Work extends Model {

    protected $K_ID_WORK;
    protected $N_NAME_WORK;
    protected $B_BAN_PRECHEK;
    protected $B_BAN_12H;
    protected $B_BAN_24H;
    protected $B_BAN_36H;
    
    //Los campos que desea ocultar para que no se reflejen en la vista.    
    protected $table = "work";
    //Los campos que desea exculir del modelo.
    protected $exclude = ["hidden", "exclude", "table", "class", "db", "__data"];

    public function __construct($properties = null) {
        parent::__construct($properties);
        $this->class = get_class($this);
    }
    
        public function setKIDWORK($K_ID_WORK) {
        $this->K_ID_WORK = $K_ID_WORK;
    }
    public function getKIDWORK() {
        return $this->K_ID_WORK;
    }
    public function setNNAMEWORK($N_NAME_WORK) {
        $this->N_NAME_WORK = $N_NAME_WORK;
    }
    public function getNNAMEWORK() {
        return $this->N_NAME_WORK;
    }
    public function setBBANPRECHEK($B_BAN_PRECHEK) {
        $this->B_BAN_PRECHEK = $B_BAN_PRECHEK;
    }
    public function getBBANPRECHEK() {
        return $this->B_BAN_PRECHEK;
    }
    public function setBBAN12H($B_BAN_12H) {
        $this->B_BAN_12H = $B_BAN_12H;
    }
    public function getBBAN12H() {
        return $this->B_BAN_12H;
    }
    public function setBBAN24H($B_BAN_24H) {
        $this->B_BAN_24H = $B_BAN_24H;
    }
    public function getBBAN24H() {
        return $this->B_BAN_24H;
    }
    public function setBBAN36H($B_BAN_36H) {
        $this->B_BAN_36H = $B_BAN_36H;
    }
    public function getBBAN36H() {
        return $this->B_BAN_36H;
    }


}

