<?php
namespace Luiscv\Idp\controllers;

class View{
    protected string $direction;
    public function src($nombre){
        return $this->direction = 'src/views/' . $nombre . '.php';
    }

    public function srcContent($nombre){
        return $this->direction = 'src/views/contents/content_' . $nombre . '.php';
    }

 }