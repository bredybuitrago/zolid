<?php

class RegionalCluster extends Model {

    protected $K_ID_RC;
    protected $N_NAME_RC;

    //Los campos que desea ocultar para que no se reflejen en la vista.
    protected $table = "regional_cluster";
    //Los campos que desea exculir del modelo.
    protected $exclude = ["hidden", "exclude", "table", "class", "db", "__data"];

    public function __construct($properties = null) {
        parent::__construct($properties);
        $this->class = get_class($this);
    }

    public function setId($K_ID_RC) {
        $this->K_ID_RC = $K_ID_RC;
    }
    public function getId() {
        return $this->K_ID_RC;
    }
    public function setName($N_NAME_RC) {
        $this->N_NAME_RC = $N_NAME_RC;
    }
    public function getName() {
        return $this->N_NAME_RC;
    }


}
