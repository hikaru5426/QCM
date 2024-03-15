<?php
Class Theme{
    private int $idTheme;
    private string $description;

    public function __construct(int $idTheme, string $description){
        $this->idTheme = $idTheme;
        $this->description = $description;
    }

    //Getter
    public function getIdTheme(): int{return $this->idTheme;}
    public function getDescription(): string{return $this->description;}

    //Setter
    public function setIdTheme(int $idTheme){$this->idTheme = $idTheme;}
    public function setDescription(string $description){$this->description = $description;}
}