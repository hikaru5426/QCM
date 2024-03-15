<?php
Class Question{
    private int $idQuestion;
    private string $libelleQuestion;
    private int $tempsQuestion;

    public function __construct(int $idQuestion, string $libelleQuestion, int $tempsQuestion){
        $this->idQuestion = $idQuestion;
        $this->libelleQuestion = $libelleQuestion;
        $this->tempsQuestion = $tempsQuestion;
    }

    //Getter
    public function getIdQuestion(): int{return $this->idQuestion;}
    public function getLibelleQuestion(): string{return $this->libelleQuestion;}
    public function getTempsQuestion(): int{return $this->tempsQuestion;}

    //Setter
    public function setIdQuestion(int $idQuestion){$this->idQuestion = $idQuestion;}
    public function setLibelleQuestion(string $libelleQuestion){$this->libelleQuestion = $libelleQuestion;}
    public function setTempsQuestion(int $tempsQuestion){$this->tempsQuestion = $tempsQuestion;}

    //Methods
    private function CalculPointsQuestion(): Float{}
}