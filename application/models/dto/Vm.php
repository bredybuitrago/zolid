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

    public function setId($K_ID_VM) {
        $this->K_ID_VM = $K_ID_VM;
    }
    public function getId() {
        return $this->K_ID_VM;
    }
    public function setIdSvm($K_ID_SVM) {
        $this->K_ID_SVM = $K_ID_SVM;
    }
    public function getIdSvm() {
        return $this->K_ID_SVM;
    }
    public function setIdSsvm($K_ID_SSVM) {
        $this->K_ID_SSVM = $K_ID_SSVM;
    }
    public function getIdSsvm() {
        return $this->K_ID_SSVM;
    }
    public function setIdRc($K_ID_RC) {
        $this->K_ID_RC = $K_ID_RC;
    }
    public function getIdRc() {
        return $this->K_ID_RC;
    }
    public function setIdFt($K_ID_FT) {
        $this->K_ID_FT = $K_ID_FT;
    }
    public function getIdFt() {
        return $this->K_ID_FT;
    }
    public function setIdSite($K_ID_SITE) {
        $this->K_ID_SITE = $K_ID_SITE;
    }
    public function getIdSite() {
        return $this->K_ID_SITE;
    }
    public function setIdWork($K_ID_WORK) {
        $this->K_ID_WORK = $K_ID_WORK;
    }
    public function getIdWork() {
        return $this->K_ID_WORK;
    }
    public function setIdContractor($K_ID_CONTRACTOR) {
        $this->K_ID_CONTRACTOR = $K_ID_CONTRACTOR;
    }
    public function getIdContractor() {
        return $this->K_ID_CONTRACTOR;
    }
    public function setIdIncident($K_ID_INCIDENT) {
        $this->K_ID_INCIDENT = $K_ID_INCIDENT;
    }
    public function getIdincident() {
        return $this->K_ID_INCIDENT;
    }
    public function setIdSiteAcces($N_ID_SITE_ACCES) {
        $this->N_ID_SITE_ACCES = $N_ID_SITE_ACCES;
    }
    public function getIdSiteAccess() {
        return $this->N_ID_SITE_ACCES;
    }
    public function setClaroResponsable($N_CLARO_RESPONSABLE) {
        $this->N_CLARO_RESPONSABLE = $N_CLARO_RESPONSABLE;
    }
    public function getClaroResponsable() {
        return $this->N_CLARO_RESPONSABLE;
    }
    public function setWeek($N_WEEK) {
        $this->N_WEEK = $N_WEEK;
    }
    public function getWeek() {
        return $this->N_WEEK;
    }
    public function setExecutationDate($D_EXECUTION_DATE) {
        $this->D_EXECUTION_DATE = $D_EXECUTION_DATE;
    }
    public function getExecutationDate() {
        return $this->D_EXECUTION_DATE;
    }
    public function setTechAffected($N_TECH_AFFECTED) {
        $this->N_TECH_AFFECTED = $N_TECH_AFFECTED;
    }
    public function getTechAffected() {
        return $this->N_TECH_AFFECTED;
    }
    public function setBandAffected($N_BAND_AFFECTED) {
        $this->N_BAND_AFFECTED = $N_BAND_AFFECTED;
    }
    public function getBandAffected() {
        return $this->N_BAND_AFFECTED;
    }
    public function setDPstartVm($D_P_START_VM) {
        $this->D_P_START_VM = $D_P_START_VM;
    }
    public function getDPstartVm() {
        return $this->D_P_START_VM;
    }
    public function setDPFinishVm($D_P_FINISH_VM) {
        $this->D_P_FINISH_VM = $D_P_FINISH_VM;
    }
    public function getDPFinishVm() {
        return $this->D_P_FINISH_VM;
    }
    public function setDRStartVM($D_R_START_VM) {
        $this->D_R_START_VM = $D_R_START_VM;
    }
    public function getDRStartVm() {
        return $this->D_R_START_VM;
    }
    public function setDRFinishVM($D_R_FINISH_VM) {
        $this->D_R_FINISH_VM = $D_R_FINISH_VM;
    }
    public function getDRFinishVM() {
        return $this->D_R_FINISH_VM;
    }
}
