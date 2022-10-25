<?php
$host="localhost";
$user="root";
$password="";
$db="prueba";
$con = mysqli_connect($host,$user,$password,$db);
$query="SELECT * FROM `tarjetas` WHERE `usuario`=$_POST['idUsuario']";

function ejecutar_consulta($query,$link)
    {
        $registros=mysqli_query($link,$query) or die("Problemas en el select:".mysqli_error());
        return $registros;
    }

?>