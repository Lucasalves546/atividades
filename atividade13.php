<?php
echo "<br><br> 1) Crie 4 funções variadas.";
function exibir_mensagem($nome)
{
    echo "<br>Olá <br>";
    echo $nome;
}

 

exibir_mensagem("Lucas Alves <br>");

echo "Que dia é hoje?<br>";

$hoje = date('d/m/Y');
echo("Hoje é "); 
echo $hoje;

?>
<br><br>
<?php
echo "<br><br>  02 função <br><br> ";
 
  function somar($numA, $numB)
  {
      return $numA + $numB;
     
  }

  $resultado = somar(188,234);
  $resultado=number_format($resultado, 2, ',', '.');
  echo $resultado;
  
?>

<br><br>
<?php
echo "<br><br>  03 função <br><br> ";
function soma($x, $y, $z) {
    
    return ($x - $y) * $z;
}

echo soma(8, 4, 10);

?>
<br>
<?php
echo "<br><br>  04 função <br><br> ";
function Funcao4($contador)
{
    if($contador < 9)
    {
        echo " <br> O contador agora é ".$contador. "<br>";
        $contador++;
        Funcao4($contador);
    }
    return true;
}
 
Funcao4('2');


?>



<?php 
echo "<br><br> 2 e 3) Crie um array e Percorra esse array com um foreach..<br><br> ";
$dados = array("Nome"=>"Lucas", "Sobrenome"=>"Alves","Idade"=> 20);
foreach ($dados as $key => $value) { 
    echo  $key." => ".$value."<br/>";
}
?>