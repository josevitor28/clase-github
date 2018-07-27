<?php
$nombre= $_POST['nombre'];
$email= $_POST['email'];
$pais= $_POST['pais'];
$password= $_POST['password'];

//esto es paa imprimir datos en pantalla
//echo $nombre."<br />".$email."<br />".$pais."<br />".$password;

if(isset($email)){

//conectando a la base de datos

$conex = mysqli_connect("127.0.0.1","root","")
	or die("No se pudo realizar la conexion");
$bd_seleccionada = mysqli_select_db($conex, "cursogratuito")
	or die("ERROR con la base de datos");
	
$sql_insertar="INSERT INTO usuarios SET nombre='$nombre', email='$email',pais='$pais',password='$password'";
mysqli_query($conex, $sql_insertar) or die(mysql_error());
}
else{
	header("location:formulario.php");
}

?>