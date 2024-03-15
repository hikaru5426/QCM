<?php

Class QCM{
    private int $idQCM;
    private string $libelleQCM;
    private int $idAuteur;

    public function __construct(int $idQCM, string $libelleQCM, int $idAuteur){
        $this->idQCM = $idQCM;
        $this->libelleQCM = $libelleQCM;
        $this->idAuteur = $idAuteur;
    }

    //Getter
    public function getIdQCM(): int{return $this->idQCM;}
    public function getLibelleQCM(): string{return $this->libelleQCM;}
    public function getIdAuteur(): int{return $this->idAuteur;}

    //Setter
    public function setIdQCM(int $idQCM){$this->idQCM = $idQCM;}
    public function setLibelleQCM(string $libelleQCM){$this->libelleQCM = $libelleQCM;}
    public function setIdAuteur(int $idAuteur){$this->idAuteur = $idAuteur;}

    //Method
    private function CompteNbQuestions(): int{}
}