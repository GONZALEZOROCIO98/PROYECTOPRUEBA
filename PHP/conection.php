<?php
$host="localhost";
$user="root";
$password="";
$db="prueba";
$link = mysqli_connect($host,$user,$password,$db);
$int_value = intval( $_POST['idUsuario'] );
$query="SELECT * FROM `tarjetas` WHERE `usuario`=$int_value";
$registros=mysqli_query($link,$query) or die("Problemas en el select:".mysqli_error());
if($registros)
    {
        echo "MIS REGISTROS SON:<br>";
        echo "<table border=0>";
        echo "<tr bgcolor=#D8D8D8><td>FOLIO</td>";
        echo "<td>BANCO</td>";
        echo "<td>USUARIO</td>";
        echo "<td>LIMITE DE CREDITO</td>"; 
        echo "<td>SALDO TOTAL</td>";                                 
        $i=1;

        while($reg=mysqli_fetch_array($registros))
        {
            if($i%2==0) echo "<tr bgcolor=#99CCFF>";
            else echo "<tr>";
            echo "<td>".$reg['folio']."</td>";
            echo "<td>",$reg['banco']."</td>";
            echo "<td>",$reg['usuario']."</td>";
            echo "<td>".$reg['limite']."</td>";
            echo "<td>",$reg['saldo']."</td>";
            $i++;
        }
        echo "</table>";
    } 

?>