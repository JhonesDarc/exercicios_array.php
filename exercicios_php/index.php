<?php
echo "Exercicios";
echo "<hr>";
$nome = "Eduardo";
$idade = 21;
echo "Olá, meu nome é ".$nome." e eu tenho ".$idade." anos.";
echo "<hr>";
$numero = 21;
$dez = 10;
if ($numero > $dez){
    echo "O número é maior que 10";
} else {
    echo "O número é menor que 10";
}
echo "<hr>";
$nota = 10;
$média = 7;
if ($nota >= $média) {
    echo "Aprovado";
} else {
    echo "Reprovado";
}
echo "<hr>";
$idade = 15;
$criança = 11;
$adolecente = 12;
$adulto = 18;
if ($idade < $adolecente) {
    echo "Criança";
} elseif ($idade > $criança && $idade < $adulto){
    echo "Adolecente";
} else{
   echo "Adulto";
}
echo "<hr>";
$L = 1;
while ($L <= 5){
    echo $L. "<br>";
    $L++;
}
    $L++;
echo "<hr>";
for ($i=0; $i <= 10 ; $i+=2) {
    echo $i."<br>";
}
echo "<hr>";
$frutas = array("uva","laranja","abacate","jabuticaba","pitaia");
foreach ($frutas as $fruta){
echo $fruta. "<br>";
}
echo "<hr>";
$numtab = 1;
for ($i=1; $i <= 100 ; $i++) {
    echo $numtab." + ".$i." = ".$numtab+$i."<br>";
}
echo "<hr>";
$numero = 3;
if ($numero%2 == 0){
    echo "PAR";
}else {
    echo "ÍMPAR";
}
echo "<hr>";
$nome = array("Ryan","Dante","Enzo","Catarina","Emerson");
foreach ($nome as $pessoa){
    echo "Bom dia, " .$pessoa. "<br>";
}
?>