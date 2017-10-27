<?php

class Vm extends Model {

    protected $K_ID_VM;
    protected $K_ID_SVM;
    protected $K_ID_SSVM;
    protected $K_ID_RC;
    protected $K_ID_FT;
    protected $K_ID_SITE;
    protected $K_ID_WORK;
    protected $K_ID_CONTRACTOR;
    protected $K_ID_INCIDENT;
    protected $N_ID_SITE_ACCES;
    protected $N_CLARO_RESPONSABLE;
    protected $N_WEEK;
    protected $D_EXECUTION_DATE;
    protected $N_TECH_AFFECTED;
    protected $N_BAND_AFFECTED;
    protected $D_P_START_VM;
    protected $D_P_FINISH_VM;
    protected $D_R_START_VM;
    protected $D_R_FINISH_VM;
    
    //Los campos que desea ocultar para que no se reflejen en la vista.    
    protected $table = "vm";
    //Los campos que desea exculir del modelo.
    protected $exclude = ["hidden", "exclude", "table", "class", "db", "__data"];

    public function __construct($properties = null) {
        parent::__construct($properties);
        $this->class = get_class($this);
    }
    
        public function setKIDVM($K_ID_VM) {
        $this->K_ID_VM = $K_ID_VM;
    }
    public function getKIDVM() {
        return $this->K_ID_VM;
    }
    public function setKIDSVM($K_ID_SVM) {
        $this->K_ID_SVM = $K_ID_SVM;
    }
    public function getKIDSVM() {
        return $this->K_ID_SVM;
    }
    public function setKIDSSVM($K_ID_SSVM) {
        $this->K_ID_SSVM = $K_ID_SSVM;
    }
    public function getKIDSSVM() {
        return $this->K_ID_SSVM;
    }
    public function setKIDRC($K_ID_RC) {
        $this->K_ID_RC = $K_ID_RC;
    }
    public function getKIDRC() {
        return $this->K_ID_RC;
    }
    public function setKIDFT($K_ID_FT) {
        $this->K_ID_FT = $K_ID_FT;
    }
    public function getKIDFT() {
        return $this->K_ID_FT;
    }
    public function setKIDSITE($K_ID_SITE) {
        $this->K_ID_SITE = $K_ID_SITE;
    }
    public function getKIDSITE() {
        return $this->K_ID_SITE;
    }
    public function setKIDWORK($K_ID_WORK) {
        $this->K_ID_WORK = $K_ID_WORK;
    }
    public function getKIDWORK() {
        return $this->K_ID_WORK;
    }
    public function setKIDCONTRACTOR($K_ID_CONTRACTOR) {
        $this->K_ID_CONTRACTOR = $K_ID_CONTRACTOR;
    }
    public function getKIDCONTRACTOR() {
        return $this->K_ID_CONTRACTOR;
    }
    public function setKIDINCIDENT($K_ID_INCIDENT) {
        $this->K_ID_INCIDENT = $K_ID_INCIDENT;
    }
    public function getKIDINCIDENT() {
        return $this->K_ID_INCIDENT;
    }
    public function setNIDSITEACCES($N_ID_SITE_ACCES) {
        $this->N_ID_SITE_ACCES = $N_ID_SITE_ACCES;
    }
    public function getNIDSITEACCES() {
        return $this->N_ID_SITE_ACCES;
    }
    public function setNCLARORESPONSABLE($N_CLARO_RESPONSABLE) {
        $this->N_CLARO_RESPONSABLE = $N_CLARO_RESPONSABLE;
    }
    public function getNCLARORESPONSABLE() {
        return $this->N_CLARO_RESPONSABLE;
    }
    public function setNWEEK($N_WEEK) {
        $this->N_WEEK = $N_WEEK;
    }
    public function getNWEEK() {
        return $this->N_WEEK;
    }
    public function setDEXECUTIONDATE($D_EXECUTION_DATE) {
        $this->D_EXECUTION_DATE = $D_EXECUTION_DATE;
    }
    public function getDEXECUTIONDATE() {
        return $this->D_EXECUTION_DATE;
    }
    public function setNTECHAFFECTED($N_TECH_AFFECTED) {
        $this->N_TECH_AFFECTED = $N_TECH_AFFECTED;
    }
    public function getNTECHAFFECTED() {
        return $this->N_TECH_AFFECTED;
    }
    public function setNBANDAFFECTED($N_BAND_AFFECTED) {
        $this->N_BAND_AFFECTED = $N_BAND_AFFECTED;
    }
    public function getNBANDAFFECTED() {
        return $this->N_BAND_AFFECTED;
    }
    public function setDPSTARTVM($D_P_START_VM) {
        $this->D_P_START_VM = $D_P_START_VM;
    }
    public function getDPSTARTVM() {
        return $this->D_P_START_VM;
    }
    public function setDPFINISHVM($D_P_FINISH_VM) {
        $this->D_P_FINISH_VM = $D_P_FINISH_VM;
    }
    public function getDPFINISHVM() {
        return $this->D_P_FINISH_VM;
    }
    public function setDRSTARTVM($D_R_START_VM) {
        $this->D_R_START_VM = $D_R_START_VM;
    }
    public function getDRSTARTVM() {
        return $this->D_R_START_VM;
    }
    public function setDRFINISHVM($D_R_FINISH_VM) {
        $this->D_R_FINISH_VM = $D_R_FINISH_VM;
    }
    public function getDRFINISHVM() {
        return $this->D_R_FINISH_VM;
    }


}

