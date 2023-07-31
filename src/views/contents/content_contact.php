<?php
namespace Luiscv\Idp\views\contents;

use Luiscv\Idp\views\components\Cover;

        $cover1= new Cover;
        echo $cover1->getAddClass("contact");
            echo $cover1->showFormContact("Contáctanos");
        echo $cover1->endCover();