<?php
namespace Luiscv\Idp\views\layouts;
use Luiscv\Idp\config\Config;

class Head {
    protected string $head;
    protected string $addHead;
    
    public function __construct(
    ){
        $this->head='
                <!DOCTYPE html>
                <html lang="es">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link rel="shortcut icon" type="image/png" href="src/views/assets/images/icon16.png"/>
                    <link href="src/views/css/style.css" rel="stylesheet">
                    <link rel="stylesheet" href="src/views/css/fonts.css">
                    <!-- #js-1 -->
                    <script src="http://code.jquery.com/jquery-latest.js"></script>
                    <title>'.Config::TITLE.'</title>'.
                    $this->addHead = null .'
                </head>
                <body>
                    <span class="ir-arriba icon-circle-up" title="Ir arriba"></span>';
    }

    public function showHead(){
        return $this->head;
    }

    public function getAddLabelHead(string $add){
        $this->addHead=$add;
        return $this->addHead;
    }
}