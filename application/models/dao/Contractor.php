<?php

class Contractor extends Model {

    protected $K_ID_CONTRACTOR;
    protected $N_NAME_CONTRACTOR;

    //Los campos que desea ocultar para que no se reflejen en la vista.
    protected $table = "contractor";
    //Los campos que desea exculir del modelo.
    protected $exclude = ["hidden", "exclude", "table", "class", "db", "__data"];

    public function __construct($properties = null) {
        parent::__construct($properties);
        $this->class = get_class($this);
    }

        public function setIdContractor($K_ID_CONTRACTOR) {
        $this->K_ID_CONTRACTOR = $K_ID_CONTRACTOR;
    }
    public function getIdContractor() {
        return $this->K_ID_CONTRACTOR;
    }
    public function setNameContractor($N_NAME_CONTRACTOR) {
        $this->N_NAME_CONTRACTOR = $N_NAME_CONTRACTOR;
    }
    public function getNameContractor() {
        return $this->N_NAME_CONTRACTOR;
    }


}
