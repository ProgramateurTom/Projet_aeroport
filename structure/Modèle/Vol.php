<?php

class vol
{
    private $idvol;
    public function getIdvol()
    {
        return $this->idvol;
    }
    public function setIdvol($idvol){
        $this->idvol = $idvol;
    }

    private $destination;
    public function getDestination(){
        return $this->destination;
    }
    public function setDestination($destination){
        $this->destination = $destination;
    }

    private $distance;
    public function getDistance(){
        return $this->distance;
    }
    public function setDistance($distance){
        $this->distance = $distance;
    }

    private $dateDepart;
    public function getDateDepart(){
        return $this->dateDepart;
    }
    public function setDateDepart($dateDepart){
        $this->dateDepart = $dateDepart;
    }
}