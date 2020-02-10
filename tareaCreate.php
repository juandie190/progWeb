<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>
<body>

<h1>Mi agenda de tareas</h1><br><br>

<form action="tareaStore.php" method="post">

    <label for="Tarea">Tarea</label>
    <input type="text" name="tarea"><br><br>

    <label for="importancia"></label>
    <select name="importancia">
      <option value="1" sle>Minima</option>  
      <option value="2">Normal</option>
      <option value="3">Alta</option>
    </select><br>

    <input type="submit" value="Enviar" name="boton">

</form>
    
</body>
</html>