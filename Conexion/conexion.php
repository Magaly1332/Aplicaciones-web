<?php
$mysqli = new mysqli("localhost", "root", "", "prueba");
if ($mysqli->connect_errno) {
    echo "Error al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

$mysqli = new mysqli("127.0.0.1", "root", "", "prueba", 3306);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

echo $mysqli->host_info . "\n";




$consulta = "SELECT * FROM numuno";
$resultado = mysqli_query( $mysqli, $consulta ) or die ( "ERROR NO SE PUEDE ACCEDER A LA BASE DE DATOS");


	echo "<table borde='2'>";
	echo "<tr>";
	echo "<th>Id</th>";
	echo "<th>Nombre</th>";
	echo "<th>Apellido</th>";
    echo "<th>Edad</th>";
    echo "<th>Direccion</th>";
    echo "<th>Ocupacion</th>";
	echo "</tr>";


while ($columna = mysqli_fetch_array( $resultado ))
	{
		echo "<tr>";
		echo "<td>" . $columna['Id'] . "</td><td>" . $columna['Nombre'] . "</td><td>" . $columna['Apellido'] . "</td><td>" . $columna['Edad'] . "</td><td>". $columna['Direccion'] . "</td><td>" . $columna['Ocupacion'] . "</td>";
		echo "</tr>";
	}
	
	echo "</table>"; 

	
	mysqli_close( $mysqli );

?>