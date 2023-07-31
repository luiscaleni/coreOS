<?php
namespace Luiscv\Idp\views\components;
use Luiscv\Idp\views\components\Form;

class Cover {
    private string $cover;
    protected string $route;
    protected string $h1Text;
    protected string $image;

    protected string $addClass;
    protected string $addContent;

    public function __construct(){
        $this->cover = "<div class='cover'>";
    }

    public function showCover(){
        return $this->cover;
    }
    public function endCover(){
        return "</div>";
    }

    public function showError404(){
        return "<p class='error404'>Error 404</p>";
    }


    public function getAddClass(string $class){
        $this->addClass=$class;
        return $this->cover ="<div class='cover ". $this->addClass . "'>";
    }

    public function showYtb(string $type, string $url){
        /*php-1*/
        if($type=="playlist"){
            $var0 = "videoseries?controls=0&amp;list=";
        }elseif($type=="one-controls"){
            $var0 = null;
            $var2="?controls=0";
        }elseif($type=="one+controls"){
            $var0 = null;
            $var2= null;
        }else{
            $varError= "1";
        }

        $var1=$url;
        
        if(empty($varError)){
            $this->route = '<iframe src="https://www.youtube.com/embed/'. $var0 . $var1 . $var2 .'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
            return $this->route;
        }elseif($varError==1){
            $this->route ="<h1>Error en youtube</h1>";
            return $this->route;
        }
    }

    public function showVideo(string $name){
        $this->route='<video src="src/views/assets/videos/'.$name.'.mp4" autoplay loop> <p>Su navegador no soporta vídeos HTML5.</p> </video>';
        return $this->route;
    }

    public function showImage(string $cvr, string $type){
        $this->image = $cvr;
        return "<img src='src/views/assets/images/".$this->image.".".$type."' class='imageCover' />";
    }

    public function showTitleCover(string $txt){
        $this->h1Text = $txt;
        return "<h1 class='h1TitleCover'>".$this->h1Text."</h1>";
    }

    public function showFormContact(string $title){
        $form= new Form();
        echo $form->getFormContact($title);
    }

    public function showFormLogin(){
        $formLogin= new Form();
        echo $formLogin->getFormLogin();
    }

    public function addContent(string $content){
        $this->addContent = $content;
        return $this->addContent;
    }
}