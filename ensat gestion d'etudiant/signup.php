<?php 
include_once 'connexion.php' ; 

$name = $_POST['nomEtulisateur'] ; 
$password = $_POST['motDePasse'] ; 

$sql = "INSERT INTO student(NAME,MOTDEPASSE) VALUES ('$name' ,'$password' );";
$result = mysqli_query ($connex,$sql) ; 
