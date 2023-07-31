<?php
namespace Luiscv\Idp\views\components;
use Luiscv\Idp\config\Config;

class Nav {
    private string $navigation;
    private string $title_logo="
    <a href='index.php' class='button' title='".Config::TITLE."' alt='".Config::TITLE."'><span><img src='src/views/assets/images/icon32.png' />".Config::TITLE."</span></a>";
    
    private string $publications="
    <a href='publications.php' class='button' title='Publicaciones' alt='Publicaciones'><span>Publicaciones</span></a>";
    
    private string $about="
    <a href='about.php' class='button' title='Acerca de' alt='Acerca de'><span>Acerca de</span></a>";
    
    private string $contact="
    <a href='contact.php' class='button' title='Contáctanos' alt='Contáctanos'><span>Contáctanos</span></a>";
    
    private string $login="
    <a href='login.php' class='button' title='Ingresar' alt='Ingresar'><span><img src='src/views/assets/images/responsive/user32.png'>Ingresar</span></a>";
    
    public function __construct(){
        $links_izq = $this->title_logo;

        $links_cent = $this->publications . $this->about . $this->contact;

        $links_ing = $this->login;

        $this->navigation = "
        <header>
            <div id='navMobile' class='navMobile'>              
                <a href='login.php'><img src='src/views/assets/images/responsive/user32.png'></a>

                <a href='index.php'>".Config::TITLE."</a>

                <div class='toggle'>
                    <button id='menuButtonOpen' class='open'><img src='src/views/assets/images/responsive/menu.png'></button>
                    <button id='menuButtonClose' class='close'><img src='src/views/assets/images/responsive/close.png'></button>
                </div>
            </div>
            <nav id='nav'>    
                <div class='nav_izq'>".$links_izq."</div>
                <div class='nav_cent'>".$links_cent."</div>
                <div class='nav_der'>".$links_ing."</div>
            </nav>
        </header>
        <main>
        ";
    }

    public function showNav(){
        return $this->navigation;
    }
}