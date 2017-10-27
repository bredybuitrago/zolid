<?php

class Permision extends Model {

    protected $K_ID_PERMISSION;
    protected $N_NAME_PERMISSION;

    //Los campos que desea ocultar para que no se reflejen en la vista.
    protected $table = "permision";
    //Los campos que desea exculir del modelo.
    protected $exclude = ["hidden", "exclude", "table", "class", "db", "__data"];

    public function __construct($properties = null) {
        parent::__construct($properties);
        $this->class = get_class($this);
    }

    public function setId($id){
      $this->K_ID_PERMISSION = $id;
    }

    public function getId(){
      return $this->K_ID_PERMISSION;
    }

    public function setName($name){
      $this->N_NAME_PERMISSION = $name;
    }

    public function getName(){
      return $this->N_NAME_PERMISSION;
    }

}
