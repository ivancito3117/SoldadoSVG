<?php

      #doc
      #        classname:        Hf3
      #        scope:                PUBLIC
      #
      #/doc
      
      class Hf3
      {
              #        internal variables
              public $posX;
              public $posY;
              public $radioX;
              public $radioY;
              public $ancho_borde;
              public $color_borde;
              public $relleno;
      
              #        Constructor
              function __construct ()
              {
                      # code...
                      
              }
              ### <ellipse cx=100 cy=100 rx=95 ry=60 stroke="red" stroke-width=2 fill="yellow" />
              public function dibujar()
              {
                echo  "<ellipse cx=\"$this->posX\" cy=\"$this->posY\" rx=\"$this->radioX\" ry=\"$this->radioY\" stroke=\"$this->color_borde\" 
                      stroke-width=\"$this->ancho_borde\" fill=\"$this->relleno\" />";
                
              }
      
      }
      ###

?>
