<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$localidad = $_POST['localidad'];
$fecha= $_POST['fecha_nacimiento'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];


echo "Recibimos... <br>";
echo "Nombre: ".$nombre."<br>";
echo "Apellido: ".$apellido."<br>";
echo "Direccion: ".$direccion."<br>";
echo "Nombre de usuario: ".$usuario."<br>";
echo "Localidad: ".$localidad."<br>";
echo "fecha de Nacimiento: ".$fecha."<br>";
echo "Email: ".$email."<br>";

