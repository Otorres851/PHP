<?php

print "<h1>Mi primer codigo PHP!</h1>";

echo "<p>Mi segundo codigo PHP!</P>" , "<em> Mi tercer codigo PHP </em>";
echo "<br><br>";

#Variable Númerica
$numero = 5;
echo " esto es una variable Número $numero";
echo "<br><br>";

#Variable Texto
$palabra = "palabra";
echo "Esto es una variable texto:  $palabra";
echo "<br><br>";

#Variable Booleana
$booleana = true;
echo "Esto es una variable booleana: $booleana";
echo "<br><br>";

#Variable Arreglo
$colores = array ("rojo","amarillo");
echo "Esto es una variable arreglo: $colores[0]";
echo "<br><br>";

#Variable Arreglo con Propiedades
$verduras = array ("verdura1"=>"lechuga","verdura2"=>"cebolla");
echo "Esto es una variable arreglo con propiedades: $verduras[verdura2]";
echo "<br><br>";

#Variable Objeto
$frutas = (object) ["fruta1"=>"pera","fruta2"=>"manzana"];
echo "Esto es una variable objeto : $frutas->fruta1";
echo "<br><br>";

#condiciones

$a = 5;
$b = 10;

if ($a > $b){
    echo "a es mayor que b";
}

else if ($a == $b){
    echo "a es igual que b";
}
    
else {
    echo "a es menor que b";
}

echo "<br><br>";

#suiches
$dia = "lunes";

switch($dia) {

    case "sabado":
        echo "voy a estudiar php";
        break;
    case 'viernes':
        echo "voy a la fiesta"; 
        break;
    case 'domingo':
        echo "voy a descansar"; 
        break;  
        
    default: echo "voy a la universidad";    
}

echo "<br><br>";

 #ciclo while

 $n = 1;

 while ($n <= 5) {
    echo $n;
    $n++;
 }
 echo "<br><br>";

 #ciclo do while

 $p = 1;
 do {
     echo $p;
     $p++;
 }
while ($p <= 5);

echo "<br><br>";

 #ciclo for

 for ($i=1; $i<=5; $i++){
     echo $i;
 }


?>