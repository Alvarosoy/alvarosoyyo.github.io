<?php
include("connection.php");
$con = connection();

$id = null;
$id = $_POST['id'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "INSERT INTO usuarios VALUES ('$id', '$name','$lastname','$username','$password','$email')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{
    echo "Error al insertar usuario";
}


?>