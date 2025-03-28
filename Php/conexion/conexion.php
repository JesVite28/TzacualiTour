<?php
//Conexion
//Variables
session_start();
$server= "localhost";
$user="root";
$pass="";
$bd="tzacualitour";

//phpinfo();
//crea la variable de conexion, y se mandan a llamar las variables creadas
$conexion= new mysqli($server, $user, $pass, $bd);
?>