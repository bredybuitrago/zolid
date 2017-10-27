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

        public function setIdWork($K_ID_WORK) {
        $this->K_ID_WORK = $K_ID_WORK;
    }
    public function getIdWork() {
        return $this->K_ID_WORK;
    }
    public function setNameWork($N_NAME_WORK) {
        $this->N_NAME_WORK = $N_NAME_WORK;
    }
    public function getNameWork() {
        return $this->N_NAME_WORK;
    }
    public function setBanPrechek($B_BAN_PRECHEK) {
        $this->B_BAN_PRECHEK = $B_BAN_PRECHEK;
    }
    public function getBanPrechek() {
        return $this->B_BAN_PRECHEK;
    }
    public function setBan12H($B_BAN_12H) {
        $this->B_BAN_12H = $B_BAN_12H;
    }
    public function getBan12H() {
        return $this->B_BAN_12H;
    }
    public function setBan24H($B_BAN_24H) {
        $this->B_BAN_24H = $B_BAN_24H;
    }
    public function getBan24H() {
        return $this->B_BAN_24H;
    }
    public function setBan36H($B_BAN_36H) {
        $this->B_BAN_36H = $B_BAN_36H;
    }
    public function getBan36H() {
        return $this->B_BAN_36H;
    }


}
