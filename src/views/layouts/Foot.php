<?php
namespace Luiscv\Idp\views\layouts;

class Foot {
    private string $foot;
    protected string $addLabel;
    
    public function __construct(){
        $this->foot ="
                    </main>
                    <script src='src/views/js/menubar.js'></script>
                    <script src='src/views/js/top.js'></script>
                    </body>
                    </html>";
    }

    public function showFoot(){
        return $this->foot;
    }

    public function getAddLabelFoot(string $label){
        $this->addLabel=$label;
        return $this->addLabel;
    }
}