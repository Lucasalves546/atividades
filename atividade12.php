<?php
echo "1) Use array com construtor <br><br>";
class food_truck 
{
    public $food_truck = array();

    public function __construct($comida){

        $this->food_truck = $comida;
    }
}

$comida = array('1'=>'Nachos <br><br>', '2'=>'Burritos <br><br>', '3'=>'Batata Frita <br><br>', '4'=>'Tapioca<br><br>'
        );

$Food = new food_truck ($comida);


foreach($Food->food_truck as $key => $val){
    echo $key." : ". $val;
}
?>
<br><br>
<?php
echo "2) Use matriz com construtor <br><br>";

$food_truck = array(array(0 => "Bebidas",

1 => "Nachos",

2 => "Burritos",

3 => "Batata Frita",

4 => "Tapioca"));

echo " Cardápio do food_truck <br></br>";
"<br><br>";
echo $food_truck[0][0]."<br>";
echo $food_truck[0][1]."<br>";
echo $food_truck[0][0]."<br>";
echo $food_truck[0][2]."<br>";



?>
<br>
<?php

echo "3)Use array com implícito<br><br>";
$Produto[4]= "1";
$Produto[3]= "2";
$Produto[2]= "3";
$Produto[1]= "4";

foreach ($Produto as $soma) {
    $soma["3"] = $soma +- 1;
    echo "$soma";
}

?>


<?php
echo "<br> <br>4) Use matriz com implícito";
echo " <br> <br> 𝕀𝕟𝕗𝕠𝕣𝕞𝕒𝕟𝕞𝕠𝕤 𝕢𝕦𝕖 𝕤𝕖𝕘𝕦𝕟𝕕𝕒 𝕖 𝕥𝕖𝕣𝕔𝕒 𝕗𝕖𝕚𝕣𝕒 𝕕𝕒 𝕡𝕣𝕠𝕩𝕚𝕞𝕒 𝕤𝕖𝕞𝕒𝕟𝕒 𝕟𝕒𝕠 𝕚𝕣𝕖𝕞𝕠𝕤 𝕒𝕓𝕣𝕚𝕣  𝕡𝕠𝕣 𝕔𝕒𝕦𝕤𝕒 𝕕𝕠 𝕗𝕖𝕣𝕚𝕒𝕕𝕠 <br><br>";


$Dia = array(array("Segunda","Terça"), 
$Produtos = array("Fechados","Fechados"));

foreach ( $Dia as $Produtos ) {
    
    echo     $Produtos["0"]."/";
    echo     $Produtos["1"]."<br>";
    
}
?>
