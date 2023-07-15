
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf8_bin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulta db</title>
    <style type="text/css">
     
      table {
        border: solid 2px #7e7c7c;
        border-collapse: collapse;
                     
      }
     
      th, h1 {
        background-color: #edf797;
      }

      td,
      th {
        border: solid 1px #7e7c7c;
        padding: 2px;
        text-align: center;
      }


    </style>
</head>
<body>
    
</body>
</html>

<?php
//validamos datos del servidor
$user = "root";
$pass = "";
$host = "localhost";


//conetamos al base datos
$connection = mysqli_connect($host, $user, $pass);

//hacemos llamado al imput de validandoweb
$nombre = $_POST["nombre"];
$documento = $_POST["documento"] ;
$email = $_POST["email"] ;
$contraseña = $_POST["contraseña"] ;

//verificamos la conexion a base datos
if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
  else
        {
            echo "<b><h3>Hemos conectado al servidor</h3></b>" ;
        }
        //indicamos el nombre de la base datos
        $datab = "validandoweb";
        //indicamos selecionar ala base datos
        $db = mysqli_select_db($connection,$datab);

        if (!$db)
        {
        echo "No se ha podido encontrar la Tabla";
        }
        else
        {
        echo "<h3>Tabla seleccionada:</h3>" ;
        }
        //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
        $instruccion_SQL = "INSERT INTO usuario(nombre,documento,email,contraseña)
                             VALUES ('$nombre','$documento','$email','$contraseña')";
                           
                            
        $resultado = mysqli_query($connection,$instruccion_SQL);

        //$consulta = "SELECT * FROM tabla where id ='2'"; si queremos que nos muestre solo un registro en especifivo de ID
        $consulta = "SELECT * FROM usuario";
        
$result = mysqli_query($connection,$consulta);
if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}
echo "<table>";
echo "<tr>";
echo "<th><h1>id</th></h1>";
echo "<th><h1>Nombre</th></h1>";
echo "<th><h1>documento</th></h1>";
echo "<th><h1>email</th></h1>";
echo "<th><h1>Contraseña</th></h1>";
echo "</tr>";

while ($colum = mysqli_fetch_array($result))
 {
    echo "<tr>";
    echo "<td><h2>" . $colum['id']. "</td></h2>";
    echo "<td><h2>" . $colum['nombre']. "</td></h2>";
    echo "<td><h2>" . $colum['documento'] . "</td></h2>";
    echo "<td><h2>" . $colum['email'] . "</td></h2>";
    echo "<td><h2>" . $colum['contraseña'] . "</td></h2>";
    echo "</tr>";
}
echo "</table>";

mysqli_close( $connection );

   //echo "Fuera "
   echo'<a href="loginvista.html"> volver atras </a>';

?>