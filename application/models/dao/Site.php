<?php

class Site extends Model {

    protected $K_ID_SITE;
    protected $N_NAME_SITE;

    //Los campos que desea ocultar para que no se reflejen en la vista.
    protected $table = "site";
    //Los campos que desea exculir del modelo.
    protected $exclude = ["hidden", "exclude", "table", "class", "db", "__data"];

    public function __construct($properties = null) {
        parent::__construct($properties);
        $this->class = get_class($this);
    }

        public function setId($K_ID_SITE) {
        $this->K_ID_SITE = $K_ID_SITE;
    }
    public function setId() {
        return $this->K_ID_SITE;
    }
    public function setName($N_NAME_SITE) {
        $this->N_NAME_SITE = $N_NAME_SITE;
    }
    public function getName() {
        return $this->N_NAME_SITE;
    }


}
