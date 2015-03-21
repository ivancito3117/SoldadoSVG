<?php 
#doc
#        classname:        Hf2
#        scope:                PUBLIC
#
#/doc

class Hf2 
{
        #        internal variables
        public $pt1;
        public $pt2;
        public $pt3;
        public $ancho_borde;
        public $color_borde;
        public $relleno;

        #        Constructor
        function __construct ()
        {
                # code...
                
        }
        ### <polygon points="100,10 190,190 10,190" stroke="purple" stroke-width=2 fill="aqua"/>
        public function dibujar()
        {
                echo  "<polygon points=\"$this->pt1 $this->pt2 $this->pt3\" stroke=\"$this->color_borde\" 
                      stroke-width=\"$this->ancho_borde\" fill=\"$this->relleno\" />";
                
        }
}
###
 
?>
