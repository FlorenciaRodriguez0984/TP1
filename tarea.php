<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio N°1</title>
</head>
<body>
<h1>Trabajo Practico N°1</h1>
    <?php
//NUMERO 1  
    echo "HOLA MUNDO"."<br>";

//NUMERO2   
    $saludo = "Hola Mundo";
    echo $saludo . "<br>";

//NUMERO 3
    $num1=15;
    $num2=2;

    $suma=$num1+$num2;
    $resta=$num1-$num2;
    $multiplicacion=$num1*$num2;
    $division=$num1/$num2;
    $resto=$num1%$num2;

   echo "La suma es: ".$suma."<br>";
   echo  "La resta es: ".$resta."<br>";
   echo "La multiplicacion es: ".$multiplicacion."<br>";
   echo "La division es: ".$division."<br>";
   echo "El resto es:".$resto."<br>";

//NUMERO 4
 $Celsius = 20;
 $Fahrenheit = (9/5 * $Celsius)+32;

 echo "$Celsius grados Celcius es igual a $Fahrenheit F"."<br>";


//NUMERO 5
 $base= 18;
 $altura= 12;
 $area = $base * $altura;
 $perimetro = $base * 2 + $altura * 2;

 echo "El area del rectangulo es:".$area. "<br>";
 echo "El perimetro del rectangulo es de ".$perimetro."<br>";



 $pi= 3.1416;
 $radio= 30;
 $a=($pi*($radio*$radio));
 $peri=(round(2 * pi()* $radio *10) / 10);

 echo "El area del circulo es:" .$a."<br>";
 echo "El perimetro del circulo es:".$peri;
 


 

?>
</body>
</html>