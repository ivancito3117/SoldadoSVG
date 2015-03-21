

<?php 

/*
* CONVENCIONES
* Hf1 para circulo
* Hf2 para triangulo
* Hf3 para elipse
*/
require_once("Hf1.class.php");
require_once("Hf2.class.php");
require_once("Hf3.class.php");

/*
echo "<svg width=200 height=200>
<circle cx=100 cy=100 r=90 stroke=\"#3ee4da\" stroke-width=2 fill=\"#bdeb6c\" /> 
<circle cx=60 cy=80 r=10 stroke=\"#34282b\" stroke-width=2 fill=\"#ffffff\" />
<circle cx=130 cy=80 r=10 stroke=\"#34282b\" stroke-width=2 fill=\"#ffffff\" />
<circle cx=95 cy=140 r=30 stroke=\"#34282b\" stroke-width=2 fill=\"#ffffff\" />
<svg>";
*/

$cara = new Hf1;
$gorro = new Hf2;
$ojoder = new Hf1;
$boca = new Hf2;
$corte_somb = new Hf1;
$torzo = new Hf3;

$cara->posX = "100";
$cara->posY = "100";
$cara->radio = "45";
$cara->ancho_borde = "2";
$cara->color_borde = "#ab977d";
$cara->relleno = "#e4ba83";

$ojoder->posX = "130";
$ojoder->posY = "95";
$ojoder->radio = "10";
$ojoder->ancho_borde = "8";
$ojoder->color_borde = "#ffffff";
$ojoder->relleno = "#bdeb6c";

$boca->pt1 = "122,110";
$boca->pt2 = "170,190";
$boca->pt3 = "170,160";
$boca->ancho_borde = "2";
$boca->color_borde = "white";
$boca->relleno = "white";

$gorro->pt1 = "100,10";
$gorro->pt2 = "150,90";
$gorro->pt3 = "50,90";
$gorro->ancho_borde = "2";
$gorro->color_borde = "#4b5e37";
$gorro->relleno = "#6b9440";

$corte_somb->posX = "100";
$corte_somb->posY = "-80";
$corte_somb->radio = "140";
$corte_somb->ancho_borde = "2";
$corte_somb->color_borde = "white";
$corte_somb->relleno = "white";

$torzo->posX = "100";
$torzo->posY = "260";
$torzo->radioX = "45";
$torzo->radioY = "120";
$torzo->ancho_borde = "2";
$torzo->color_borde = "#4b5e37";
$torzo->relleno = "#6b9440";

echo "<svg width=200 height=300>";
$torzo->dibujar();
$cara->dibujar();
$ojoder->dibujar();
$boca->dibujar();
$gorro->dibujar();
$corte_somb->dibujar();

echo "<svg>";




?>
