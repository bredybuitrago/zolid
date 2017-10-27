<?php

class SiteBand extends Model {

    protected $K_ID_SB;
    protected $N_NAME_SB;

    //Los campos que desea ocultar para que no se reflejen en la vista.
    protected $table = "site_band";
    //Los campos que desea exculir del modelo.
    protected $exclude = ["hidden", "exclude", "table", "class", "db", "__data"];

    public function __construct($properties = null) {
        parent::__construct($properties);
        $this->class = get_class($this);
    }

        public function setId($K_ID_SB) {
        $this->K_ID_SB = $K_ID_SB;
    }
    public function getId() {
        return $this->K_ID_SB;
    }
    public function setName($N_NAME_SB) {
        $this->N_NAME_SB = $N_NAME_SB;
    }
    public function getName() {
        return $this->N_NAME_SB;
    }


}
