<?php
Class Reponse{
    private float $reponseEleve;
    
    public function __construct(float $reponseEleve){
        $this->reponseEleve = $reponseEleve;
    }

    //Getter
    public function getReponseEleve():float{return $this->reponseEleve;}

    //Setter
    public function setReponseEleve(float $reponseEleve){$this->reponseEleve = $reponseEleve;}
}