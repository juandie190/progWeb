
<?php
include ("tarea.php");

$miTarea = new Tarea();

$miTarea->store($_POST['tarea'], $_POST['importancia']);

header('location: tareaIndex.php');
?>