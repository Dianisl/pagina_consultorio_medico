<?php
//conexion con la base de datos y el servidor
$link=mysqli_connect("127.0.0.1","root","") or die("<h2>el servidor no se ha encontrado</h2>");
$db = mysqli_select_db($link,"consultorio") or die("error de conexion");

//obtenemos los valores del formulario
$nombre = $_POST["nombreUsuario"];
$correo = $_POST["correo"];
$sexo = $_POST["sexo"];
$fecha = $_POST["fecha"];
$telefono = $_POST["telefono"];
$hora = $_POST["hora"];

//obtiene la longitud de un string
$req = (strlen($nombre)*strlen($correo)*strlen($sexo)*strlen($fecha)*strlen($telefono)*strlen($hora)) or die("no se han llenado todos los campos");


//ingresar la informacion a la tabla de datos
mysqli_query($link,"INSERT INTO usuarios VALUES('$nombre','$correo','$sexo','$fecha','$telefono','$hora')") or die("error de envio");

echo '
    Registro Completo <br>
    gracias por agendar una cita <br>
    <a href="index.html"2>Volver a inicio</>
';
?>