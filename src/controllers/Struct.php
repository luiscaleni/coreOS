<?php
namespace Luiscv\Idp\controllers;

use Luiscv\Idp\controllers\Controller;
use Luiscv\Idp\views\layouts\Head;
use Luiscv\Idp\views\layouts\Foot;
use Luiscv\Idp\views\components\Nav;
use Luiscv\Idp\views\components\Footer;

class Struct {

    public function __construct(protected string $body,protected string $addHead=""){

        $head = new Head;
        echo $head->showHead();
        echo $head->getAddLabelHead($this->addHead);
        
            $nav = new Nav;
            echo $nav->showNav();

                $body = new Controller;
                echo $body->renderContent($this->body);

            $footer = new Footer;
            echo $footer->showFooter();

        $foot = new Foot;
        echo $foot->showFoot();
    }
}