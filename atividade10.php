
<hr/>
<div style="text-align:center">Questão 01</div>
<hr/>     
<?php
  
  echo " <br> <br> Faça um programa que exiba na tela “Use máscara!” <br> <br>";

     echo "USE MÁSCARA! <br><br>";
     
 

?>
<hr/>
<div style="text-align:center">Questão 02</div>
<hr/>
        <?php
  
  echo " <br> <br> Faça um programa que exiba na tela “2021” <br> <br>";

     echo "2021 <br> <br>";
     
?>
 <hr/>
<div style="text-align:center">Questão 03</div>
<hr/>
 <?php

echo "<br> <br> Faça um programa que exiba na tela o seu nome, sua turma e a data";
"<br><br>";
  $nome = "Lucas Alves";
  $turma = "TII2001M-03";
  $hoje = date('d/m/Y');
  if($turma = "TII2001M-03"){
    echo "<br><br>No dia {$hoje} {$nome} é da turma {$turma} <br><br>";

  }
?>
<hr/>
<div style="text-align:center">Questão 04</div>
<hr/>
 <?php

echo "<br> <br> Crie uma variável para receber seu nome e a data do seu nascimento como
valores. Exiba uma mensagem concatenando os valores das variáveis.<br><br>";
"<br><br>";
echo $z1 = "Lucas<br><br>";

echo $z2 = "22/12/2000<br><br>";
  
?>
<hr/>
<div style="text-align:center">Questão 05</div>
<hr/>
<?php 


echo "<br> <br> Faça um programa que informe o nome e idade de todos os integrantes da
sua casa. Depois exiba a soma das idades. <br><br>";

  $Eu = "20";
  $Irmão = "25";
  $Mãe= "48";
  
  $soma=$Eu+$Irmão+$Mãe;
  echo "Minha mãe tem: $Mãe anos <br />";
  echo "Meu irmão tem: $Irmão anos <br />";
  echo "Eu tenho : $Eu anos <br><br>";
  echo "A soma das idades é: $soma<br /> <br>";

?>
<hr/>
<div style="text-align:center">Questão 06</div>
<hr/>
<?php

echo "<br> <br> Procure na internet um conversor de moeda. Escreva um programa que
converta sua mesada de reais para dólar. <br> <br> ";

$mesada = "300.00";
$dolar = "0.020";

$Mesada=($mesada*$dolar);
$Mesada=number_format($Mesada, 2, ',', '.');

# Exibe resultados
echo "Dólar: $dolar<br>";
echo "Mesada: $mesada<br>";
echo "Soma R$ $Mesada<br><br> ";
?>
<hr/>
<div style="text-align:center">Questão 07</div>
<hr/>
<?php
 echo "<br> <br> Continuando o programa anterior. Se sua mesada em dólares for maior que
 US$ 100,00 escreva Vou comprar bitcoin. Se for maior que US$ 200,00
 escreva Vou investir no tesouro nacional. Se for menor que U$100,00 escreva
 Vou comprar bala.<br><br>";




 $val = 30.00; //Valor de entrada
$resultado = "";

if($val > 100.00){
  $resultado = "Vou comprar bitcoin";
}if($val > 200.00){
  $resultado = "Vou investir no tesouro nacional";
}elseif($val < 100.00){
    $resultado = "Vou comprar bala";
}

echo $resultado;

?>
<hr/>
<div style="text-align:center">Questão 09</div>
<hr/>
<?php

echo "<br> <br> Escreva um programa para ler o salário mensal atual de um funcionário e o
percentual de reajuste de 6%. Calcular e escrever o valor do novo salário. <br> <br> ";

$salario = 300;
$salario += $salario * 0.6;
echo "O valor do novo salário é $salario" ;
?>
<hr/>


<div style="text-align:center">Questão 10</div>
<hr/>
<?php

echo "<br> <br> Faça um programa que receba um valor que foi depositado e exiba o valor
com rendimento após um mês. Considere fixo o juro da poupança em 0,049%
a. m. <br> <br> ";


$valor_deposito = 200;
$rendimento_mes = 4/2;

 $rendimento_mes = $valor_deposito + ($valor_deposito * 0.0049);
 echo"O Rendimento do valor depositado apos um mes é de: R$ $rendimento_mes";
 
?>
<hr/>

<div style="text-align:center">Questão 11</div>
<hr/>
<?php

echo "<br> <br> Escreva um programa para ler o nome e a idade de uma pessoa, e exibir
quantos dias de vida ela possui. Considere sempre anos completos, e que um
ano possui 365 dias. Ex: uma pessoa com 19 anos possui 6935 dias de vida;
veja um exemplo de saída: MARIA, VOCÊ JÁ VIVEU 6935 DIAS. <br> <br> ";
function exibir_mensagem($nome)
{
    echo $nome;
  }
exibir_mensagem("LUCAS");
$dateInicial=date_create("2000-12-22");
$dateFinal=date_create("2021-09-02");
$key=date_diff($dateInicial,$dateFinal);
echo " VOCÊ JÁ VIVEU ". $key->format("%a"). " DIAS.";

?>
 
<div style="text-align:center">Questão 13</div>
<hr/>
<?php

echo "<br> <br> Escreva um programa para ler o salário mensal atual de um funcionário e
aplicar um percentual de reajuste, calcular e escrever o valor do novo salário. <br> <br> ";
$salario = 1200;
$salario += $salario * 0.9;
echo "O valor do novo salário é $salario";

?>
<hr/>
<div style="text-align:center">Questão 14</div>
<hr/>
<?php

echo "<br> <br> O custo de um carro novo ao consumidor é a soma do custo de fábrica com
a porcentagem do distribuidor e dos impostos (aplicados ao custo de fábrica).
Supondo que o percentual do distribuidor seja de 28% e os impostos de 45%,
escrever um programa para ler o custo de fábrica de um carro, calcular e
escrever o custo final ao consumidor.<br> <br> ";
$custo_de_fabrica = 12000;
$percentual_distribuidor = ($custo_de_fabrica*0.28)+$custo_de_fabrica;
$imposto = $custo_de_fabrica*0.45+$custo_de_fabrica;
$custo_consumidor = $percentual_distribuidor+$imposto+$custo_de_fabrica;

$custo_consumidor=number_format($custo_consumidor, 2, ',', '.');
echo"O Valor do automóvel é: ". $custo_consumidor;
?>
<hr/>
<div style="text-align:center">Questão 15</div>
<hr/>
<?php

echo "<br> <br> Uma revendedora de carros usados paga a seus funcionários vendedores
um salário fixo por mês, mais uma comissão também fixa para cada carro
vendido e mais 5% do valor das vendas por ele efetuadas. Escrever um
programa que leia o número de carros por ele vendidos, o valor total de suas
vendas, o salário fixo e o valor que ele recebe por carro vendido. Calcule e
escreva o salário final do vendedor. <br> <br> ";
$totalvenda = 200;
$salariofixo = 1200;
$comissao = 500;

  
  $salariofinal = $salariofixo + $comissao + ($totalvenda*5/100);
echo"O salário Final é: ",$salariofinal;
?>

<hr/>
<div style="text-align:center">Questão 16</div>
<hr/>
<?php

echo "<br> A Loja Mamão com Açúcar está vendendo seus produtos em 5 (cinco)
prestações sem juros. Faça um programa que receba um valor de uma compra
e mostre o valor das prestações. <br> ";
$valorTotal =200;
$valorPrestacao = 1;
$valorPrestacao = $valorTotal/3;// altere os numeros de 1 ao 5.

echo"Valor de cada prestação: ",$valorPrestacao;

?>
<hr/>
<div style="text-align:center">Questão 17</div>
<hr/>
<?php

echo "<br> Faça um algoritmo que receba o preço de custo de um produto e mostre o
valor de venda. Sabe-se que o preço de custo receberá um acréscimo de
acordo com um percentual informado pelo usuário. <br> ";

$custo = 100;

$percent = 20;



$percent = ($percent/100) * $custo;
$venda = $custo + $percent;
echo"O valor de venda é: ",$venda;

?>

<hr/>
<div style="text-align:center">Questão 18</div>
<hr/>
<?php

echo "<br> A padaria Hotpão vende uma certa quantidade de pães franceses e uma
quantidade de broas a cada dia. Cada pãozinho custa R$ 0,50 e a broa custa
R$ 4,50. Ao final do dia, o dono quer saber quanto arrecadou com a venda dos
pães e broas (juntos), e quanto deve guardar numa conta de poupança (10%
do total arrecadado). Você foi contratado para fazer os cálculos para o dono.
Com base nestes fatos, faça um programa para ler as quantidades de pães e
de broas, e depois calcular os dados solicitados. <br><br> ";

$paes = 200;
$broas = 150; 
$total;

$total= $paes*0.12+$broas*1.5;
echo"Total das vendas: ",$total;
$total = $total*10/100;
echo"<br>Total a ser colocado na pupança: ", $total;

?>

<hr/>
<div style="text-align:center">Questão 19</div>
<hr/>
<?php

echo "<br> Um motorista deseja colocar no seu tanque X reais de gasolina. Escreva
um programa para ler o preço do litro da gasolina e o valor do pagamento, e
exibir quantos litros ele conseguiu colocar no tanque. <br><br> ";

$tanque= 20;
     $gasval= 5;
     $valorpago=30;

$tanque<-$valorpago/$gasval;
echo"Voce colocou no tanque os seguintes ".$tanque."litros de gasolina: ";

    
    $tanque = $valorpago/$gasval;

   echo"Voce colocou no seu veiculo ".$tanque." de gasolina.";
   return 0;


?>
<hr/>
<div style="text-align:center">Questão 20</div>
<hr/>
<?php

echo "<br> Programa par perfeito. Faça um programa em que o usuário precise digitar
um número de 1 até 10. Agora o outro usuário digita o segundo número. Se o
número do primeiro usuário for igual ao do segundo escreva “Esse é seu par
perfeito” Se os números forem diferentes escreva “Afaste-se do seu inimigo” <br><br> ";

?>
<html>
 <head>
 </head>
 <body>
 <form action="" method="get">
  Digite um número:  <input type="number" name="number" /><br />
  Testar se é múltiplo de:  <input type="number" name="teste" /><br />
  <input type="submit" name="submit" value=" Calcula" />
 </form> 
 <?php 
  $numero = $_GET['number'];
  $ParImpar= $_GET['teste'];

  if($numero % $ParImpar == 0)
   echo " Usuário 1 digitou :$numero Esse é seu par perfeito Usuário 2 digitou :$ParImpar";
  else
   echo " Usuário 1 digitou : $numero Afaste-se do seu inimigo o Usuário 2 digitou : $ParImpar";
 ?>
 </body>
</html>