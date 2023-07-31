<?php
namespace Luiscv\Idp\views\contents;

use Luiscv\Idp\views\components\Cover;
use Luiscv\Idp\views\components\Section;
use Luiscv\Idp\views\components\Target;

$id = array ("1","2","3","4");
 
$cover1 = new Cover;
echo $cover1->getAddClass("publication");
    echo $cover1->showTitleCover("Banner: Publicaciones");
echo $cover1->endCover();

$section1=new Section("Publicaciones","article");
echo $section1->showSection();
    for ($i=1; $i < 21; $i++) {
        $targets = new Target(
            "Publicación #{$i}",
            "Breve descripción de la publicación, no tiene que ser largo.",
            "#"
        );
        echo $targets->showTarget();
    }
echo $section1->endSection();
echo $section1->endSection("article");