<?php
namespace Luiscv\Idp\views\components;
use Luiscv\Idp\config\Config;

class Footer {
    private string $footer;
    protected string $nombreDeLaEmpresa = Config::TITLE;
    protected string $copyrightDeLaEmpresa = Config::COPYRIGHT;
    protected string $fb = Config::FB;
    protected string $tw = Config::TW;
    protected string $yt = Config::YT;
    
    public function __construct(){
        $this->footer ='
        <footer>
            <div class="contenedor">
                <div class="group">
                    <p>Sedes:</p>
                        <ul>
                            <li><a href="#">Buenos aires</a></li>
                            <li><a href="#">Tucuman</a></li>
                            <li><a href="#">Mendoza</a></li>
                            <li><a href="#">Córdoba</a></li>
                        </ul>
                </div>

                <div class="group">
                    <p>Conéctate con '.$this->nombreDeLaEmpresa.':</p>
                    <ul>
                        <li><a href="#">Política de privacidad</a></li>
                        <li><a href="#">Términos y condiciones</a></li>
                        <li><a href="#">Servicios para empresas</a></li>
                    </ul>
                </div>

                <div class="group">
                    <p>Acerca de:</p>
                    <ul>
                        <li><a href="#">¿Qué es '.$this->nombreDeLaEmpresa.'?</a></li>
                        <li><a href="#">Nuestros colaboradores</a></li>
                        <li><a href="#">Nuestra visión</a></li>
                    </ul>
                </div>

                <div class="group">
                    <p>Contacto:</p>
                    <ul>
                        <li><a href="contact.php"><span class="icon-mail4"></span> Email</a></li>
                        <li><a href="'.$this->fb.'" target="_blank" class="facebook"><span class="icon-facebook"></span> Facebook</a></li>
                        <li><a href="'.$this->tw.'" target="_blank" class="twitter"><span class="icon-twitter"></span> Twitter</a></li>
                        <li><a href="'.$this->yt.'" target="_blank" class="youtube"><span class="icon-play"></span> Youtube</a></li>
                    </ul>
                </div>
            </div>
            <p class="copyright">'.$this->copyrightDeLaEmpresa.' '.$this->nombreDeLaEmpresa.' | Todos los derechos reservados.</p>
        </footer>
        ';
    }

    public function showFooter(){
        return $this->footer;
    }
}