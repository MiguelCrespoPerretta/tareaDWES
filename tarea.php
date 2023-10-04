<?php 
//EJ1
$x1=3;$x2=7;echo($x1+$x2);echo('<hr>');
//EJ2
$frutas = array("Manza", "Plátano", "Naranja");
echo(count($frutas));echo('<hr>');
//EJ3
$estaturas= array("Juan"=>"186","Alberto"=>"172","Marta"=>"173",);
echo('<hr>');
//EJ4
echo($estaturas["Alberto"]);
echo('<hr>');
//EJ5
foreach($estaturas as $a =>$B){
	echo($a."=>".$B);
	echo("<br>");
}
echo('<hr>');
//EJ6
arsort($estaturas);
echo(implode("/",$estaturas));
echo('<hr>');
//EJ7
krsort($estaturas);
echo(implode("/",$estaturas));
echo('<hr>');
//EJ8
$colores=array("rojo","verde","azul","amarillo");
sort($colores);
echo(implode("/",$colores));
echo('<hr>');
//EJ9
rsort($colores);
echo(implode("/",$colores));
echo('<hr>');
//EJ10
$cadena="Esto es un string de varias palabras";
echo(strlen($cadena)."<br>");//Número de caracteres que almacena la cadena
echo(strToUpper($cadena)."<br>");//Devuelve la cadena escrita en mayúscula
echo(str_word_count($cadena)."<br>");//Número de palabras que almacena la cadena
echo('<hr>');
//EJ11
define("STOCK","d");
echo('<hr>');
//EJ12
$a=1;$b=2;$c=-3;
function colapsar($a,$b,$c){
	$NaN=sqrt(-2);
	if($a==0){throw("Esto no es una equación de segundo grado.");
	return 0;}
	$solucion_a=(-$b+sqrt($b**2-4*$a*$c))/(2*$a);
	$solucion_b=(-$b-sqrt($b**2-4*$a*$c))/(2*$a);
	if($solucion_a==$NaN && $solucion_b==$NaN){
		throw("Esta ecuación de segundo grado, carece de solución real.");
	}
	else if($solucion_a==$NaN){echo($solucion_b);}
	else if($solucion_b==$NaN){echo($solucion_a);}
	else{echo($solucion_a." ".$solucion_b);}
}
colapsar($a,$b,$c);
echo('<hr>');
?>