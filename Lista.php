<hr/>
<div style="text-align:center">Questão 01</div>
<hr/>
<?php
echo "Faça um programa para ler dois valores inteiros, e depois mostrar
na tela a soma desses números com uma mensagem explicativa, conforme
exemplos.<br><br>";
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
     <label>resultado = <?=$resul;?>
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
    
     
<hr>
<div style="text-align:center">Questão 03</div>
<hr/>
     <?php
	  	echo "Fazer um programa para ler quatro valores inteiros A, B, C e D. A
          seguir, calcule e mostre a diferença do produto de A e B pelo produto de C e D
          segundo a fórmula: DIFERENCA = (A * B - C * D).<br><br>";



$a = filter_input(INPUT_POST, "TxtNumero1");
$b = filter_input(INPUT_POST, "TxtNumero2");
$c = filter_input(INPUT_POST, "TxtNumero3");
$d = filter_input(INPUT_POST, "TxtNumero4");
$Resul = "";                
echo"DIFERENCA = ",$resul = ($a * $b - $c * $d); ;

 ?>         
<style>
input, select{padding:5px; margin: 5px;}
</style>
<label> <?=$Resul;?>
<form method="post">
    
 <label>Número 1: <input type="Text" name="TxtNumero1"/></label><br>
 <label>Número 2: <input type="Text" name="TxtNumero2"/></label><br> 
 <label>Número 3: <input type="Text" name="TxtNumero3"/></label><br> 
 <label>Número 4: <input type="Text" name="TxtNumero4"/></label><br> 
 
    
 </label><br>
 <input type="submit" name="Calcular" value="Calcular">

</form>      


<hr>
<div style="text-align:center">Questão 04</div>
<hr/>
     <?php
	  	echo "Fazer um programa que leia o número de um funcionário, seu
          número de horas trabalhadas, o valor que recebe por hora e calcula o salário
          desse funcionário. A seguir, mostre o número e o salário do funcionário, com
          duas casas decimais.<br><br>";



$vHora= filter_input(INPUT_POST, "TxtNumero01");
$qHoras = filter_input(INPUT_POST, "TxtNumero02");
$salario = 800;
$Resultado = "";                
echo"salário ",$Resultado = ($salario + $qHoras * $vHora); ;


 ?>         
<style>
input, select{padding:5px; margin: 5px;}
</style>

<form method="post">
    
 <label>Número: <input type="Text" name="TxtNumero01"/></label><br>
 <label>Número de Horas: <input type="Text" name="TxtNumero02"/></label><br> 
 
 <abel><br> 
 
    
 </label><br>
 <input type="submit" name="Calcular" value="Calcular">

</form>      
          


<hr>
<div style="text-align:center">Questão 05</div>
<hr/>
     <?php
	  	echo "Fazer um programa para ler o código de uma peça 1, o número de
      peças 1, o valor unitário de cada peça 1, o código de uma peça 2, o número de
      peças 2 e o valor unitário de cada peça 2. Calcule e mostre o valor a ser pago.<br><br>";



$cod_pc1= filter_input(INPUT_POST, "cod_pc1");
$num_pc1 = filter_input(INPUT_POST, "num_pc1");
$val_pc1 = filter_input(INPUT_POST, "val_pc1");
$cod_pc2= filter_input(INPUT_POST, "cod_pc2");
$num_pc2 = filter_input(INPUT_POST, "num_pc2");
$val_pc2 = filter_input(INPUT_POST, "val_pc2");
$Resultad = "";                
$cod_pc1;
$num_pc1; 
$cod_pc2; 
$num_pc2;

$val_pc1; 
$val_pc2;


 echo"VALOR A PAGAR: R$ " .$Resultad = ($num_pc1 * $val_pc1) + ($num_pc2 * $val_pc2);


 ?>         
<style>
input, select{padding:5px; margin: 5px;}
</style>

<form method="post">
    
 <label>Número de peça 01: <input type="Text" name="num_pc1"/></label><br>
 <label> Valor da peça 01: <input type="Text" name="val_pc1"/></label><br> 
 <label>Número de peça 02: <input type="Text" name="num_pc2"/></label><br>
 <label>Valor da peça 02: <input type="Text" name="val_pc2"/></label><br> 
 
 <abel><br> 
 
    
 </label><br>
 <input type="submit" name="Calcular" value="Calcular">

</form>   

<hr>
<div style="text-align:center">Questão 06</div>
<hr/>
     <?php
	  	echo "Fazer um programa que leia três valores com ponto flutuante de
      dupla precisão: A, B e C. Em seguida, calcule e mostre:
      a) a área do triângulo retângulo que tem A por base e C por altura.
      b) a área do círculo de raio C. (pi = 3.14159)
      c) a área do trapézio que tem A e B por bases e C por altura.
      d) a área do quadrado que tem lado B.
      e) a área do retângulo que tem lados A e B.<br><br>";



$A= filter_input(INPUT_POST, "A");
$B = filter_input(INPUT_POST, "B");
$C = filter_input(INPUT_POST, "C");
              

echo "TRIANGULO: ",$Resultad =  $A * $C / 2,"<br><br>";

echo"CIRCULO: ",$Resultad =  3,14159 * $C * $C,"<br><br>";

echo"TRAPEZIO: ",$Resultad =  ($A + $B) * $C / 2,"<br><br>";

echo"QUADRADO: ",$Resultad =  $B * $B,"<br><br>";

echo"RETANGULO: ",$Resultad =  $A * $B,"<br><br>";


 ?>         
<style>
input, select{padding:5px; margin: 5px;}
</style>

<form method="post">
    
 <label> Digite o Valor de A: <input type="Text" name="A"/></label><br>
 <label> Digite o Valor de B: <input type="Text" name="B"/></label><br>
 <label> Digite o Valor de C: <input type="Text" name="C"/></label><br>
 </label><br>
 <input type="submit" name="Calcular" value="Calcular">

</form>   
<hr>
<div style="text-align:center">Questão 07</div>
<hr/>
<?php
	  	echo "Fazer um programa para ler um número inteiro, e depois dizer se
      este número é negativo ou não.<br><br>";



$valor= filter_input(INPUT_POST, "Valor");
$Resultad = "";
 
if($valor < 0){
   echo "Negativo ";
}else{
   echo "Positivo ";
}
echo $Resultad= $valor 
?>

        
<style>
input, select{padding:5px; margin: 5px;}
</style>

<form method="post">
    
 <label> Digite o Valor: <input type="Text" name="Valor"/></label><br>

 <input type="submit" name="Calcular" value="Calcular">

</form>   
<hr>
<div style="text-align:center">Questão 08</div>
<hr/>
<?php
	  	echo "Fazer um programa para ler um número inteiro e dizer se este
      número é par ou ímpar.<br><br>";


$numero = $_GET['number'];
    
if($numero % 2 == 0)
  echo "$numero é par";
else
  echo "$numero é ímpar";
?>

        
<style>
input, select{padding:5px; margin: 5px;}
</style>


    
<form action="" method="get">
  Digite um número:  <input type="number" name="number" /><br />
  <input type="submit" name="submit" value="Testar" />
 </form> 
 <hr>
 <div style="text-align:center">Questão 09</div>
<hr/>
<?php
	  	echo "- Leia 2 valores inteiros (A e B). Após, o programa deve mostrar uma
      mensagem Sao Multiplos ou Nao são Multiplos, indicando se os valores lidos
      são múltiplos entre si. Atenção: os números devem poder ser digitados em ordem
      crescente ou decrescente.<br><br>";


      $numero = $_GET['number'];
      $multiplo = $_GET['mult'];
    
      if($numero . $multiplo == 0)
       echo "$numero São múltiplo de $multiplo";
      else
       echo "$numero não são múltiplo de $multiplo";
     ?>


        
<style>
input, select{padding:5px; margin: 5px;}
</style>

<form action="" method="get">
      Digite um número:  <input type="number" name="number" /><br />
      Testar se é múltiplo de:  <input type="number" name="mult" /><br />
      <input type="submit" name="submit" value="Testar" />
     </form> 
     <hr>
 <div style="text-align:center">Questão 10</div>
<hr/>
<?php
	  	echo "Leia a hora inicial e a hora final de um jogo. A seguir calcule a
      duração do jogo, sabendo que o mesmo pode começar em um dia e terminar em
      outro, tendo uma duração mínima de 1 hora e máxima de 24 horas. <br><br>";

$a= filter_input(INPUT_POST, "a");
$b= filter_input(INPUT_POST, "b");
$Resultad = "";
    
      
      if($a >= $b)
           echo"O JOGO DUROU ". $Resultad = (24 - $a) + $b." HORA(S)";
      else
          echo"O JOGO DUROU ".$Resultad = $b - $a." HORA(S) ";
          
      
      
     ?>       
       
<style>
input, select{padding:5px; margin: 5px;}
</style>

<form method="post">
    
 <label> hora inicial: <input type="Text" name="a"/></label><br>
 <label> hora final: <input type="Text" name="b"/></label><br>
 <input type="submit" name="Calcular" value="Calcular">

</form>   


<hr>
 <div style="text-align:center">Questão 12</div>
<hr/>
<?php
	  	echo "Você deve fazer um programa que leia um valor qualquer e
      apresente uma mensagem dizendo em qual dos seguintes intervalos ([0,25],
      (25,50], (50,75], (75,100]) este valor se encontra. Obviamente se o valor não
      estiver em nenhum destes intervalos, deverá ser impressa a mensagem “Fora
      de intervalo”. <br><br>";

$A= filter_input(INPUT_POST, "aa");





if ($A <0 || $A> 100.0)

echo"Fora de intervalo ";

else if ($A <= 25.0)

echo"Intervalo [0,25] ";

else if ($A <= 50.0)

echo"Intervalo (25,50] ";

else if ($A <= 75.0)

echo"Intervalo (50,75]";

else if ($A <= 100.0)

echo"Intervalo (75,100] ";
 
     ?>       
       
<style>
input, select{padding:5px; margin: 5px;}
</style>

<form method="post">
    
 <label> : <input type="Text" name="aa"/></label><br>
 
 <input type="submit" name="Calcular" value="Calcular">

</form>  

