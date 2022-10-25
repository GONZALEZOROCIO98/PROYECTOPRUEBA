<?php
$host="localhost";
$user="root";
$password="";
$db="prueba";
$link = mysqli_connect($host,$user,$password,$db);
$int_value = intval( $_POST['idUsuario'] );
$query="SELECT * FROM `tarjetas` WHERE `usuario`=$int_value";
$query2="SELECT * FROM `usuarios` WHERE `id`=$int_value;";
$registro2=mysqli_query($link,$query2) or die("Problemas en el select:".mysqli_error());
$registros=mysqli_query($link,$query) or die("Problemas en el select:".mysqli_error());
$usuario=mysqli_fetch_array($registro2);
if($registros)
    {
        echo "MIS TARJETAS SON:<br>";
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
            switch ($reg['banco']) {
                case 1:
                    echo "<td>BBVA</td>";
                    break;
                case 2:
                    echo "<td>SANTANDER</td>";
                    break;
                case 3:
                    echo "<td>BANREGIO</td>";
                    break;
                case 4:
                    echo "<td>BANJERCITO</td>";
                    break;
                case 5:
                    echo "<td>BANBAJIO</td>";
                    break;
                case 6:
                    echo "<td>BANCOPPEL</td>";
                    break;
                case 7:
                    echo "<td>HSBC</td>";
                    break;    
            }
            echo "<td>",$usuario['nombre']."</td>";
            echo "<td>".$reg['limite']."</td>";
            echo "<td>",$reg['saldo']."</td>";
            $i++;
        }
        echo "</table>";
        
    } 
    echo "<br><button><a href=\"index.html\">REGRESAR</a></button>"
?>