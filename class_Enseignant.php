<?php
Class Enseignant extends Utilisateur{
    private Int $nbQCMCrees;

    public function __construct(int $idUtilisateur, string $nom, string $prenom, string $login, string $motDePasse , int $nbQCMCrees){
        parent::__construct($idUtilisateur, $nom, $prenom, $login, $motDePasse);
        $this->nbQCMCrees=$nbQCMCrees;
    }

    //Getter
    public function getnbQCMCrees(): Int{
        return $this->nbQCMCrees;
    }

    //Setter
    public function setnbQCMCrees(int $nbQCMCrees){
        $this->nbQCMCrees=$nbQCMCrees;
    }

    //Methods
    private function CompteNbQCMCrees(): Int{}

}