<?php
    Class Eleve extends Utilisateur{
        private Int $nbQCMRealises;
        private Float $moyenneQCM;

        public function __construct(int $idUtilisateur, string $nom, string $prenom, string $login, string $motDePasse , int $nbQCMRealises){
            parent::__construct($idUtilisateur, $nom, $prenom, $login, $motDePasse);
        }

        //Getter
        public function getNbQCMRealises(): Int{return $this->nbQCMRealises;}
        public function getMoyenneQCM(): Float{return $this->moyenneQCM;}

        //Setter
        public function setNbQCMRealises(Int $nbQCMRealises){$this->nbQCMRealises = $nbQCMRealises;}
        public function setMoyenneQCM(Float $moyenneQCM){$this->moyenneQCM = $moyenneQCM;}
        

        //Methods
        private function CompteNbQCMRealises() : Int{}
        private function CalculMoyenneQCM() : Float{}
    }