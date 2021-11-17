<!doctype html>
<html>
<body>

parámetros recibidos por el método GET 
<br />
<?php
print_r($_GET);
print '<br />';
print 'nombre: ' .  $_GET['nombre']; 
print '<br />';
print 'País: ' .  $_GET['pais']; 
print '<br />';
?>

<table border ="1">
<caption>tabla GET </caption>
<?php
print '<tr>';
print '	<td>nombre</td>';
print '	<td>' . $_GET['nombre'] . '</td>';
print '</tr>';
?>
</table>

<?php
print '<br />';
print 'Nombre: ';
print '<input type="text" name="nombre" value=" ' . $_GET['nombre'] . '" />';
print '<tr>';

?>
<br /><br />
Parámetros recibidos por el métoso POST
<br />
<?php
print_r($_POST);
?>

<br /><br />
</body>
</html>

