<?php
namespace Luiscv\Idp\controllers;
use Luiscv\Idp\controllers\View;

class Controller{
    private string $route;
    public function render($name){
        $view = new View;
        $this->route= $view->src($name);
        require_once($this->route);
    }

    public function renderContent($name){
        $view = new View;
        $this->route= $view->srcContent($name);
        require_once($this->route);
    }
}