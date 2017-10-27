<?php

class SiteSector extends Model {

    protected $K_ID_SS;
    protected $N_NAME_SS;

    //Los campos que desea ocultar para que no se reflejen en la vista.
    protected $table = "site_sector";
    //Los campos que desea exculir del modelo.
    protected $exclude = ["hidden", "exclude", "table", "class", "db", "__data"];

    public function __construct($properties = null) {
        parent::__construct($properties);
        $this->class = get_class($this);
    }

        public function setId($K_ID_SS) {
        $this->K_ID_SS = $K_ID_SS;
    }
    public function getId() {
        return $this->K_ID_SS;
    }
    public function setName($N_NAME_SS) {
        $this->N_NAME_SS = $N_NAME_SS;
    }
    public function getName() {
        return $this->N_NAME_SS;
    }


}
