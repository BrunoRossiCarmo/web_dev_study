<?php

//Variáveis:
$a = 'Uma string';
$b = 6;
$c = 19.7;

//Echo para ver o print das variáveis:
echo $a;
echo "<br>"; //Quebra de linha.
echo $b;
echo "<br>"; //Quebra de linha.
echo $c;
echo "<br>"; //Quebra de linha.

#Arrays (Arranjos):
$med = array('Paracetamol','Pegaminhaball',"Vaitomarnocow");
echo "Echo 1<br>-------<br>"; //Quebra de Linha no mesmo Print.
echo 'O medicamento ', $med[1]," é muito gostoso! <br>";
$mg = array('Paracetamol'=>'750','Pegaminhaball'=>20,"Vaitomarnocow"=>'10'); //Associar valores
echo var_dump($mg);

//Prints não são muito bons:
print($mg['Paracetamol']); //Ele imprime a variável associada apenas.
echo "<br>";

//Criar pilhas:
$hosp = array();
array_push($hosp,'Sírius','Albus');
print_r($hosp);
echo "<br>"

?>
