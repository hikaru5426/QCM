<?php
Class Proposition{
    private int $idProposition;
    private string $libelleProposition;
    private bool $resultatVraiFaux;

    public function __construct(int $idProposition, string $libelleProposition, bool $resultatVraiFaux){
        $this->idProposition = $idProposition;
        $this->libelleProposition = $libelleProposition;
        $this->resultatVraiFaux = $resultatVraiFaux;
    }

    //Getter
    public function getIdProposition(): int{return $this->idProposition;}
    public function getLibelleProposition(): string{return $this->libelleProposition;}
    public function getResultatVraiFaux(): bool{return $this->resultatVraiFaux;}

    //Setter
    public function setIdProposition(int $idProposition){$this->idProposition = $idProposition;}
    public function setLibelleProposition(string $libelleProposition){$this->libelleProposition = $libelleProposition;}
    public function setResultatVraiFaux(bool $resultatVraiFaux){$this->resultatVraiFaux = $resultatVraiFaux;}


    //Methods
}