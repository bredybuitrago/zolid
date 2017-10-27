<?php

class Incident extends Model {

    protected $K_ID_INCIDENT;
    protected $K_ID_IT;
    protected $N_STATUS_INCIDENT;
    protected $N_DESCRIPTION_INCIDENT;
    protected $D_START_INCIDENT;
    protected $D_FINISH_INCIDENT;
    protected $I_DURATION_INCIDENT;
    
    //Los campos que desea ocultar para que no se reflejen en la vista.    
    protected $table = "incident";
    //Los campos que desea exculir del modelo.
    protected $exclude = ["hidden", "exclude", "table", "class", "db", "__data"];

    public function __construct($properties = null) {
        parent::__construct($properties);
        $this->class = get_class($this);
    }
    
        public function setKIDINCIDENT($K_ID_INCIDENT) {
        $this->K_ID_INCIDENT = $K_ID_INCIDENT;
    }
    public function getKIDINCIDENT() {
        return $this->K_ID_INCIDENT;
    }
    public function setKIDIT($K_ID_IT) {
        $this->K_ID_IT = $K_ID_IT;
    }
    public function getKIDIT() {
        return $this->K_ID_IT;
    }
    public function setNSTATUSINCIDENT($N_STATUS_INCIDENT) {
        $this->N_STATUS_INCIDENT = $N_STATUS_INCIDENT;
    }
    public function getNSTATUSINCIDENT() {
        return $this->N_STATUS_INCIDENT;
    }
    public function setNDESCRIPTIONINCIDENT($N_DESCRIPTION_INCIDENT) {
        $this->N_DESCRIPTION_INCIDENT = $N_DESCRIPTION_INCIDENT;
    }
    public function getNDESCRIPTIONINCIDENT() {
        return $this->N_DESCRIPTION_INCIDENT;
    }
    public function setDSTARTINCIDENT($D_START_INCIDENT) {
        $this->D_START_INCIDENT = $D_START_INCIDENT;
    }
    public function getDSTARTINCIDENT() {
        return $this->D_START_INCIDENT;
    }
    public function setDFINISHINCIDENT($D_FINISH_INCIDENT) {
        $this->D_FINISH_INCIDENT = $D_FINISH_INCIDENT;
    }
    public function getDFINISHINCIDENT() {
        return $this->D_FINISH_INCIDENT;
    }
    public function setIDURATIONINCIDENT($I_DURATION_INCIDENT) {
        $this->I_DURATION_INCIDENT = $I_DURATION_INCIDENT;
    }
    public function getIDURATIONINCIDENT() {
        return $this->I_DURATION_INCIDENT;
    }


}

