<?php

class Stage extends Model {

    protected $K_ID_STAGE;
    protected $N_NAME_STAGE;
    
    //Los campos que desea ocultar para que no se reflejen en la vista.    
    protected $table = "stage";
    //Los campos que desea exculir del modelo.
    protected $exclude = ["hidden", "exclude", "table", "class", "db", "__data"];

    public function __construct($properties = null) {
        parent::__construct($properties);
        $this->class = get_class($this);
    }
    
        public function setKIDSTAGE($K_ID_STAGE) {
        $this->K_ID_STAGE = $K_ID_STAGE;
    }
    public function getKIDSTAGE() {
        return $this->K_ID_STAGE;
    }
    public function setNNAMESTAGE($N_NAME_STAGE) {
        $this->N_NAME_STAGE = $N_NAME_STAGE;
    }
    public function getNNAMESTAGE() {
        return $this->N_NAME_STAGE;
    }


}

