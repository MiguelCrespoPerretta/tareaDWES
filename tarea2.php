<?php
	//EJ1
	//echo phpinfo();
	//EJ2
	/*
	echo('<p>'.'Tomorrow I \'ll learn PHP global variables.'.'</p>');
	echo('<p>'.'This is a bad command : del c:\\*.*'.'</p>');
	*/
	//EJ3
	/*
	function esPrimo(int $x){
		$primo=true;
		if($x==0 ||$x==1){return false;}
		for($a=2;$a<floor($x/2)+1;++$a){
			if($x%$a==0){$primo=false;break;}
		}
		return $primo;
	}
	$total=0;
	for($x=0;$x<100;++$x){
		if(esPrimo($x)){
			$total+=$x;
		}
	}
	echo($total);
	*/
	//EJ4
	/*
	$arr=array(1,1,2,2,3,4,5,5);
	$arr=array_unique($arr);
	echo(implode("/",$arr));
	*/
	//EJ5
	/*
	$numero=443;
	function romper(int $numero){
		$cadena=strval($numero);
		$resultado=array();
		for($a=0;$a<strlen($cadena);++$a){
			array_push($resultado,intval(substr($cadena,$a,1)));
		}
		return $resultado;
	}
	$atomizado=romper($numero);
	$total=0;
	foreach($atomizado as $a){
		$total+=$a;
	}
	echo($total);
	*/
?>