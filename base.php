<?php  

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Error de conexion a la base de datos: " . $conn->connect_error);
}else{
    echo "";
}



?>;