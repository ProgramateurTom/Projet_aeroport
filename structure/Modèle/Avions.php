<?php
class avions
{
    private $idavion;
    public function getIdavion()
    {
        return $this->idavion;
    }
    public function setIdavion($idavion){
        $this->idavion = $idavion;
    }

    private $typeavion;
    public function getTypeavion(){
        return $this->typeavion;
    }
    public function setTypeavion($typeavion){
        $this->typeavion = $typeavion;
    }

    private $nbplace;
    public function getNbplace(){
        return $this->nbplace;
    }
    public function setNbplace($nbplace){
        $this->nbplace = $nbplace;
    }

    private $disponibilite;
    public function getDisponibilite(){
        return $this->disponibilite;
    }
    public function setDisponibilite($disponibilite){
        $this->disponibilite = $disponibilite;
    }
}