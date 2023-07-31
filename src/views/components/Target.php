<?php
namespace Luiscv\Idp\views\components;

class Target {
    private string $idPub;
    private string $idUser;
    private string $username;
    protected string $date;
    public function __construct(
        private string $title,
        private string $text,
        private string $link
    ){
        $this->idPub=uniqid();
        $this->idUser="3";
        $this->username="Luis Caleni";//bindParam();
        $this->date=date("d/m/y");
    }

    public function showTarget(){
            $target="<div class='target'>
                    <a href='". $this->link ."' title='". $this->title ."'>
                        <h3>" . $this->title . "</h3><br>
                        <p class='description'>" . $this->text . "</p><br>
                        <p class='description'>Autor: " . $this->username . "  |  Fecha: " . $this->date . "</p>
                    </a>
                </div>";

        return $target;
    }
}