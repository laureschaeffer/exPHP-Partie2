<h1> Exercice 14 </h1>

 

<p> Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu'une classe VoitureElec

qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie) </p>

 

<h2> Resultat </h2>

<?php

class Voiture{

    protected string $_marque;
    protected string $_modele;

    public function __construct($_marque, $_modele){
        $this-> _marque=$_marque;
        $this-> _modele=$_modele;
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
    public function getInfos(){
        return "Le véhicule est une ".$this->_marque." ".$this->_modele;
    }
}

class VoitureElec extends Voiture{

    protected int $_autonomie;

    public function __construct($_marque, $_modele, $_autonomie){
        parent::__construct($_marque, $_modele);
        $this-> _autonomie=$_autonomie;
    }

    public function getInfos(){
        return parent::getInfos()." et a une autonomie de ".$this->_autonomie;
    }
}