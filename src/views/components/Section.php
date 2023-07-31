<?php
namespace Luiscv\Idp\views\components;

class Section {
    private string $articleIn;
    private string $articleEnd;
    private string $section;
    private string $title;
    private string $text;
    private string $nameImage;
    protected string $video;
    protected string $gps;


    public function __construct(
        string $title="",
        string $articleIn=""
    ){
        $this->title = isset($title) ? trim($title) : null;
        $this->articleIn = isset($articleIn) & $articleIn === "article" ? "<article>" : "";
        $this->section= $this->articleIn . "<section><div class='contH1'><h1>" . $this->title . "</h1></div> <div class='cont'>";
    }

    public function showSection(){
        return $this->section;
    }

    public function endSection(string $articleEnd=""){
        $this->articleEnd = isset($articleEnd) && $articleEnd === "article" ? "</article>" : "";

        if ($this->articleEnd==="article") {
            return "</article>";
        }elseif (empty($this->articleEnd)) {
            return "</div></section>";
        }
    }

    public function showShortText(string $txtShort){
        $this->text=$txtShort;
        return "<p class='shortTextSection'>".$this->text."</p>";
    }

    public function showLongText(string $txtLong){
        $this->text=$txtLong;
        return "<p class='longTextSection'>".$this->text."</p>";
    }

    public function showImageAndLongText(string $img, string $txtLong){
        $this->nameImage = $img;
        $this->text = $txtLong;
        return "<p class='longTextSection'><img src='src/views/assets/images/photos/" . $this->nameImage . ".jpg' class='float'>".$this->text."</p>";
    }

    public function showImage(string $img, string $titleFoto=""){
        $this->nameImage = $img;
        return "<a href='src/views/assets/images/photos/".$this->nameImage.".jpg' title='".$titleFoto."'><div class='contImageCarrusel'><div class='divImgHover'></div><img src='src/views/assets/images/photos/" . $this->nameImage . ".jpg'></div></a>";
    }

    public function showVideo(string $vdo){
        $this->video = $vdo;
        return "<video controls><source src='src/views/assets/videos/".$this->video.".mp4' type='video/mp4'>Este es un elemento de video no soportado por tu navegador.</video>";
    }

    public function showGps(){
        $this->gps='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d609.5524816647123!2d-58.44542660123634!3d-34.65045337988339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccb002b418c91%3A0x7ceb7926fc3028f4!2sIglesia%20De%20Dios%20De%20La%20Profec%C3%ADa-%20Villa%201.11.14!5e1!3m2!1ses-419!2sar!4v1677080720757!5m2!1ses-419!2sar" width="1730" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
        return $this->gps;
    }
}