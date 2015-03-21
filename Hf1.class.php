<?php 
#doc
#        classname:        Hf1
#        scope:                PUBLIC
#
#/doc

class Hf1
{
        #        internal variables
        public $posX;
        public $posY;
        public $radio;
        public $ancho_borde;
        public $color_borde;
        public $relleno;

        #        Constructor
        function __construct ()
        {
                # code...
                
        }
        ###
        public function dibujar()
        {
                echo  "<circle cx=\"$this->posX\" cy=\"$this->posY\" r=\"$this->radio\" stroke=\"$this->color_borde\" 
                      stroke-width=\"$this->ancho_borde\" fill=\"$this->relleno\" />";
                
        }

}
### 
 
?>
