<?php
namespace Luiscv\Idp\views\contents;

use Luiscv\Idp\views\components\Cover;

$cover1 = new Cover;
echo $cover1->showCover();
    echo $cover1->showFormLogin();
echo $cover1->endCover();