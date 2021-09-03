 
<?php
echo "1) Faça um programa que utilize switc <br><br>";
$numero = 1;
switch ($numero){
    case 1 :$numero;
    $mensagem = " uma coca cola";
    break;
    case 2:
        $mensagem = " um suco de laranja";
        break;
        case 3:
            $mensagem = "um chá";
            break;
    default:
    $mensagem = " digite uma numero para escolher";
}

echo " Você comprou {$mensagem}";

?>
<br><br>
<?php
echo "2) Faça um programa que utilize while <br><br>";
$i = 1;
while ($i <= 10):
    echo $i;
    $i++;
endwhile;
?>
<br><br>
<?php
echo "3) Faça um programa que utilize do while <br><br>";

$i = 6;
do {
    echo $i;
} while ($i < 0);
?>

<br><br>
<?php
echo "4) Faça um programa que utilize for <br><br>";
$num = 56;

  for($i = 0; $i <= 10; $i++){
    echo "{$num} * {$i} = " . ($num * $i) . "<br>";
  }
?>
<br><br>
<?php
echo "5) Faça um programa que utilize break <br><br>";
$num01 = filter_input(INPUT_POST, "txtNumero1");
$num02 = filter_input(INPUT_POST, "txtNumero2");
$opera = filter_input(INPUT_POST, "slOperacao");
$resul = "";

if($num01  && $num02){
  switch($opera){
    case "+":
      $resul = ($num01 + $num02);
    break;
    case "-":
      $resul = ($num01 - $num02);
    break;
    case "*":
      $resul = ($num01 * $num02);
    break;
    case "/":
      $resul = ($num01 / $num02);
    break;
  }
}

?>
     <style>
      input, select{padding:5px; margin: 5px;}
     </style>
   <h1><?=$resul;?></h1>
     <form method="post">
       <label>Número 1: <input type="text" name="txtNumero1"/></label><br>
       <label>Número 2: <input type="text" name="txtNumero2"/></label><br> 
       <label>Operação:
         <select name="slOperacao">
           <option value="+">Adição</option>
           <option value="-">Subtração</option>
           <option value="*">Multiplicação</option>
           <option value="/">Divisão</option>
         </select>
       </label><br>
       <input type="submit" name="Calcular" value="Calcular">
     </form>
     <br><br>
     <?php
echo "6) Faça um programa que utilize continue:";

for ($i = 0; $i < 10; ++$i) {
    if ($i == 2)
        continue;
        "<br><br>";
    echo "$i\n";
    
}
?>