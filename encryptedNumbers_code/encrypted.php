<?php

/**
 * este modulo encripta un numero
 * @param int $elNumero
 * @return int
 */

function modEncriptacion($elNumero)
{
    /*Int $elNumero, $u, $d, $c, $m, $num1, $num2, $num3, $num4, $aux*/
    $u = $elNumero % 10;
    $d = floor($elNumero / 10) % 10;
    $c = floor($elNumero / 100) % 10;
    $m = floor($elNumero / 1000) % 10;

    $num4 = ($u + 7) % 10;
    $num3 = ($d+ 7) % 10;
    $num2 = ($c + 7) % 10;
    $num1 = ($m + 7) % 10;

    $aux = $num1;
    $num1 = $num3;
    $num3 = $aux;

    $aux = $num2;
    $num2 = $num4;
    $num4 = $aux;

    $nro = (($num1 * 1000) + ($num2 * 100) + ($num3 * 10) + $num4);
    return $nro;
}

/**
 * este modulo encripta un numero
 * @param int $elNumero
 * @return int
 */

 function modDesencriptacion($elNumero){
     /*Int $elNumero, $u, $d, $c, $m, $num1, $num2, $num3, $num4, $aux*/
     $u = $elNumero % 10;
     $d = floor($elNumero / 10) % 10;
     $c = floor($elNumero / 100) % 10;
     $m = floor($elNumero / 1000) % 10;
 
     $num4 = ($u + 3) % 10;
     $num3 = ($d+ 3) % 10;
     $num2 = ($c + 3) % 10;
     $num1 = ($m + 3) % 10;
 
     $aux = $num1;
     $num1 = $num3;
     $num3 = $aux;
 
     $aux = $num2;
     $num2 = $num4;
     $num4 = $aux;
 
     $nro = (($num1 * 1000) + ($num2 * 100) + ($num3 * 10) + $num4);
     return $nro;
 }

 //PROGRAMA numeros
 //este programa 
 //Int $numero, $encriptado, $desencriptado

 echo "Ingrese el número: \n";
 $numero = trim(fgets(STDIN));
 $encriptado = modEncriptacion($numero);
 $desencriptado = modDesencriptacion($encriptado);
 echo "Numero: " . $numero . "\n >Encriptado: " . $encriptado . "\n >Desencriptado: " . $desencriptado ;
?>
