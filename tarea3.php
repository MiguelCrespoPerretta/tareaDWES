<?php
if(isset($_COOKIE["idioma"])){
	$idioma=$_COOKIE["idioma"];
}
else{
	echo("<p>Cookie sin asignar</p>");
	setrawcookie("idioma","español",time()+60);
	$idioma="español";
}
if(isset($_POST["idioma"])){
	if($_POST["idioma"]!=$idioma){
		$idioma=$_POST["idioma"];
		setrawcookie("idioma",$idioma,time()+60);
	}
}
echo("<p>el idioma es: ".$idioma."</p>");
?>
<head>
<title>Tarea 3</title>
</head>
<?php
?>
<form action="tarea3.php" autocomplete="off" method="post">
	<p>Idioma</p>
	<input type="text" name="idioma" pattern="[A-Za-zñ]{1,30}" required>
	<br>
	<input type="submit" value="Enviar" class="falsoBoton">
</form>