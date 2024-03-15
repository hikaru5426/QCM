<?php
class Utilisateur{
    private Int $idUtilisateur;
    private String $nom;
    private String $prenom;
    private String $login;
    private String $motDePasse;

    //Constructeur
    public function __construct(Int $idUtilisateur, String $nom, String $prenom, String $login, String $motDePasse){
        $this->idUtilisateur = $idUtilisateur;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->login = $login;
        $this->motDePasse = $motDePasse;
    }

    //Methods

    //Getter
    function getIdUtilisateur(){ return $this->idUtilisateur; }
    function getNom(){ return $this->nom; }
    function getPrenom(){ return $this->prenom; }
    function getLogin(){ return $this->login; }
    function getMotDePasse(){ return $this->motDePasse; }

    //Setter
    function setIdUtilisateur($idUtilisateur){ $this->idUtilisateur = $idUtilisateur; }
    function setNom($nom){ $this->nom = $nom;}
    function setPrenom($prenom){ $this->prenom = $prenom; }
    function setLogin($login){ $this->login = $login; }
    function setMotDePasse($motDePasse){ $this->motDePasse = $motDePasse; }
}