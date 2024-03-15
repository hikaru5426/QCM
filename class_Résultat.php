<?php
Class Résultat{
    private int $idResultat;
    private string $dateAffectation;
    private string $dateRealisation;
    private float $note;

    public function __construct(int $idResultat, string $dateAffectation, string $dateRealisation, float $note){
        $this->idResultat = $idResultat;
        $this->dateAffectation = $dateAffectation;
        $this->dateRealisation = $dateRealisation;
        $this->note = $note;
    }

    //Getter
    public function getIdResultat(): int{return $this->idResultat;}
    public function getDateAffectation(): string{return $this->dateAffectation;}
    public function getDateRealisation(): string{return $this->dateRealisation;}
    public function getNote(): float{return $this->note;}

    //Setter
    public function setIdResultat(int $idResultat){$this->idResultat = $idResultat;}
    public function setDateAffectation(string $dateAffectation){$this->dateAffectation = $dateAffectation;}
    public function setDateRealisation(string $dateRealisation){$this->dateRealisation = $dateRealisation;}
    public function setNote(float $note){$this->note = $note;}

    //Methods
    private function CalculNoteQCM(): float{}
}