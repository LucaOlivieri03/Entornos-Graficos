<html>
<head>
<title> Listados completo </title>
</head>
<body>
<?php
include("conexion.inc");
$vSql = "SELECT * FROM ciudades";
$vResultado = mysqli_query($link, $vSql);
$total_registros=mysqli_num_rows($vResultado);
?>
<table border=1>
<tr>
<td><b>Id</b></td>
<td><b>Ciudad</b></td>
<td><b>País</b></td>
<td><b>Habitantes</b></td>
<td><b>Superficie</b></td>
<td><b>tieneMetro</b></td>
</tr>
<?php
while ($fila = mysqli_fetch_array($vResultado))
{
?>
<tr>
 <td><?php echo ($fila['ciudad_id']); ?></td>
 <td><?php echo ($fila['ciudad_nombre']); ?></td>
 <td><?php echo ($fila['ciudad_pais']); ?></td>
 <td><?php echo ($fila['ciudad_habitantes']); ?></td>
 <td><?php echo ($fila['ciudad_superficie']); ?></td>
 <td><?php echo ($fila['ciudad_metro']); ?></td>
</tr>
<tr>
 <td colspan="6">
<?php
}
// Liberar conjunto de resultados
mysqli_free_result($vResultado);
// Cerrar la conexion
mysqli_close($link);
?>
 </td>
</tr>
</table>
<p>&nbsp;</p>
<p align="center"><a href="Menu.html">Volver al menu; del ABM</a></p>
</body>
</html>