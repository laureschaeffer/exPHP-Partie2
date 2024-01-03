<?php

Class Voiture {

    private string $_marque;
    private string $_modele;
    private int $_nbPortes;
    private int $_vitesseActuelle;
    private bool $_statut;

    public function __construct(string $marque, string $modele, int $nbPortes){

        $this->_marque=$marque;
        $this->_modele=$modele;
        $this->_nbPortes=$nbPortes;
        $this->_vitesseActuelle=0;
        $this->_statut= false;
    }

    public function get_marque(){
        return $this->_marque;
    }

    public function set_marque($_marque){
        $this->_marque = $_marque;
        return $this;
    }

    public function get_modele(){
        return $this->_modele;
    }

    public function set_modele($_modele){
        $this->_modele = $_modele;
        return $this;
    }

    public function get_nbPortes(){
        return "Nombre de portes : ".$this->_nbPortes."<br>";
    }

 

    public function set_NbPortes($_nbPortes){
        $this->_nbPortes = $_nbPortes;
        return $this;
    }
    public function get_vitesseActuelle(){
        return "Sa vitesse actuelle est de : ".$this->_vitesseActuelle." km / h<br>";
    }

    public function set_vitesseActuelle(_$vitesseActuelle){
        $this->_vitesseActuelle = $vitesseActuelle;
        return $this;
    }

// ------------------------------------- fonctions personnalisées-------------------------------

    public function demarrer(){
        $this->_statut= true;
        return "est démarré<br>";
    }

    public function __toString() {
        return $this->_marque." ".$this->_modele;
    }

    public function accelerer(int $vitesse){

        if (!$this->_statut) {
            echo "Pour accélérer, il faut démarrer le véhicule".$this." !<br>";
        }

        else{
            $this->_vitesseActuelle+=$vitesse;
        }
    }

    public function ralentir(int $vitesse){

        if (!$this->_statut){ //! pour voir si c'est différent
            echo "Pour ralentir, il faut démarrer le véhicule".$this." !<br>";
        }

        else{
            $this->_vitesseActuelle-=$vitesse;
        }

    }
    public function stopper(){
        $this->_statut= false;
        return "est à l'arrêt<br>";
    }

    public function get_nom(){
        return "Nom et modèle du véhicule : ".$this."<br>";
    }
    public function getInfos() {
        return $this->get_nom().$this->get_nbPortes()."Le véhicule ".$this->get_marque()." ".$this->demarrer().$this->get_vitesseActuelle();

    }
}