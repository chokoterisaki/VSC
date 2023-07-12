<?php

include "php/conexion_rp.php";
session_start();
if($_POST)
{
	$name=$_SESSION['usuario'];
    $msg=$_POST['msg'];
    
	$sql="INSERT INTO `chat`(`name`, `message`) VALUES ('".$name."', '".$msg."')";

	$query = mysqli_query($conexion,$sql);
	if($query)
	{
		header('Location: chat.php');
	}
	else
	{
		echo "Algo salió mal";
	}
	
	}
?>