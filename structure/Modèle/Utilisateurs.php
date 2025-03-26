<?php

class Utilisateurs
{
    private $id_client;
    public function getIdClient()
    {
        return $this->id_client;
    }
    public function setIdClient($id_client)
    {
        $this->id_client = $id_client;
    }

    private $nom;
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    private $prenom;
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    private $email;
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    private $password;
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }

    private $adresse;
    public function getAdresse(){
        return $this->adresse;
    }
    public function setAdresse($adresse){
        $this->adresse = $adresse;
    }

    private $dateNaissance;
    public function getDateNaissance(){
        return $this->dateNaissance;
    }
    public function setDateNaissance($dateNaissance){
        $this->dateNaissance = $dateNaissance;
    }
}