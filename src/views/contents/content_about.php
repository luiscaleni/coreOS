<?php
namespace Luiscv\Idp\views\contents;
use Luiscv\Idp\config\Config;

use Luiscv\Idp\views\components\Cover;
use Luiscv\Idp\views\components\Section;

        $cover1= new Cover;
        echo $cover1->getAddClass("about");
            echo $cover1->showTitleCover("Banner: Acerca de nosotros");
        echo $cover1->endCover();

        $section1=new Section(Config::TITLE,"article");
        echo $section1->showSection();
            echo $section1->showImageAndLongText('1','
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc convallis mollis pellentesque. Ut non neque a purus congue fermentum et a nibh. Suspendisse sit amet tempor nisl. Morbi vitae nisl luctus odio fermentum rutrum. Curabitur eu urna quis est vestibulum malesuada eu vel augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis dictum justo tellus, eget ultricies diam pellentesque in. Phasellus porta ac lorem vel placerat. Sed gravida molestie enim, a interdum metus tempor efficitur. In turpis enim, interdum vitae dui eget, maximus blandit sapien. Proin vulputate, ex at interdum sollicitudin, massa elit scelerisque felis, nec ornare leo eros vitae nunc. Aenean vitae lacus eget lorem tincidunt sodales id dictum sem. Nulla pulvinar lacus eget magna mattis mollis. Donec cursus iaculis dui vitae tincidunt. Integer non pulvinar nulla, et pellentesque magna.
            <br><br>
            Nunc dignissim eu leo at imperdiet. Nulla in mattis metus, vitae consectetur mauris. Donec tempus sem quam, mattis fringilla mi iaculis ac. Praesent ut ipsum vehicula, mollis odio finibus, vehicula lectus. Etiam tempor nec erat sed iaculis. Suspendisse potenti. Integer dui urna, aliquet et rhoncus et, varius vitae lectus.
            <br><br>
            Cras luctus cursus ullamcorper. Vivamus vel auctor quam. In vestibulum lorem ex, quis tristique risus egestas id. Curabitur sit amet lorem sed mi varius faucibus eu quis tortor. Vivamus sodales, tellus ut consectetur elementum, urna sem efficitur augue, quis viverra magna tellus sit amet nibh. In ac elit congue, interdum ligula et, egestas tellus. Donec rhoncus augue sollicitudin nibh imperdiet commodo. Etiam scelerisque purus nibh. Nam eget tempus dui. Phasellus ornare posuere justo non finibus. Proin mollis facilisis purus vitae varius. Nullam aliquam faucibus sapien, eget sagittis tellus. Integer porttitor accumsan venenatis.
            <br><br>
            Quisque urna est, tempor tristique elementum vel, finibus sit amet urna. Cras aliquam vestibulum ante posuere accumsan. Mauris volutpat quam at nulla fringilla, et finibus purus fermentum. Ut tempor justo in lorem dapibus lacinia. Integer nec metus lacinia, fermentum turpis quis, varius tortor. Cras a dictum dui, nec tempor erat. Nam mollis accumsan suscipit. In tincidunt tellus id augue ullamcorper, et egestas tellus molestie.
            <br><br>
            Fusce at ante eu risus commodo placerat. Integer vitae risus fringilla, lobortis mauris finibus, congue nisi. Maecenas placerat, ligula et rutrum venenatis, neque est convallis neque, et porta dui leo id elit. Aenean quis efficitur metus, sed eleifend justo. Nam vel bibendum dolor, at porttitor mi. Quisque eu molestie tortor. Aliquam ac mauris bibendum lectus aliquam imperdiet a ut ipsum. Integer quis consectetur urna. Duis luctus justo nulla, porttitor condimentum orci iaculis sed. Ut nec semper ipsum, ac accumsan felis. Aenean ac enim justo. Curabitur rhoncus pellentesque libero id molestie. Pellentesque porta, ipsum eu fringilla scelerisque, est elit pulvinar lacus, at efficitur elit leo sit amet felis. Morbi facilisis vehicula ligula. Fusce eget tincidunt mauris.
            ');
        echo $section1->endSection();

        $section2=new Section("Fotos");
        echo $section2->showSection();
            echo $section2->showImage("1", "Foto 1");
            echo $section2->showImage("3", "Foto 3");
            echo $section2->showImage("5", "Foto 5");
            echo $section2->showImage("2", "Foto 2");
            echo $section2->showImage("4", "Foto 4");
        echo $section2->endSection();

        echo $section1->endSection("article");