<?php
namespace Luiscv\Idp\views\contents;
use Luiscv\Idp\config\Config;

use Luiscv\Idp\views\components\Cover;
use Luiscv\Idp\views\components\Section;
use Luiscv\Idp\views\components\Target;

$id = array ("1","2","3","4");

    $cover1 = new Cover;
    echo $cover1->showCover();
        echo $cover1->showImage("cover", "jpg");
        echo $cover1->showTitleCover(Config::TITLE);
    echo $cover1->endCover();

    $sectionAboutUs=new Section("Bienvenidos","article");

        echo $sectionAboutUs->showSection();
            echo $sectionAboutUs->showShortText("
            Descripción breve de la empresa.
            ");
        echo $sectionAboutUs->endSection();

        $sectionPost=new Section("Nuestros Posts");
        echo $sectionPost->showSection();
            for ($i=1; $i < 5; $i++) {
                $targets = new Target(
                    "Publicación #{$i}",
                    "Breve descripción de la publicación, no tiene que ser largo.",
                    "#"
                );
                echo $targets->showTarget();
            }
        echo $sectionPost->endSection();

        $sectionPhotos1=new Section("Fotos");
        echo $sectionPhotos1->showSection();
            echo $sectionPhotos1->showImage("1", "Foto 1");
            echo $sectionPhotos1->showImage("2", "Foto 2");
            echo $sectionPhotos1->showImage("3", "Foto 3");
            echo $sectionPhotos1->showImage("4", "Foto 4");
        echo $sectionPhotos1->endSection();

        
        $section4=new Section("Sede");
        echo $section4->showSection();
            echo $section4->showGps();
        echo $section4->endSection();
        
    echo $sectionAboutUs->endSection("article");