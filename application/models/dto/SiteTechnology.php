<?php

class SiteTechnology extends Model {

    protected $K_ID_ST;
    protected $N_NAME_ST;

    //Los campos que desea ocultar para que no se reflejen en la vista.
    protected $table = "site_technology";
    //Los campos que desea exculir del modelo.
    protected $exclude = ["hidden", "exclude", "table", "class", "db", "__data"];

    public function __construct($properties = null) {
        parent::__construct($properties);
        $this->class = get_class($this);
    }

        public function setId($K_ID_ST) {
        $this->K_ID_ST = $K_ID_ST;
    }
    public function getId() {
        return $this->K_ID_ST;
    }
    public function setName($N_NAME_ST) {
        $this->N_NAME_ST = $N_NAME_ST;
    }
    public function getName() {
        return $this->N_NAME_ST;
    }


}
