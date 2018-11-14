<!DOCTYPE html>
<html>
    <head>
        <title>Administrador</title>
        <meta charset="UTF-8">
        <link rel = "stylesheet" type = "text/css" 
   href = "<?php echo base_url(); ?>css/estilos.css">
        <link href="https://fonts.googleapis.com/css?family=handlee" rel="stylesheet">
    </head>
    <body>
        <h1>Bienvenido administrador: <?=$usuario?></h1>
        
        <div class="section">
      <h1><span>Opciones de usuario:</span></h1>
      <table>
        <tr>
          <th>Crear usuario</th>
          <th>Borrar usuario</th>
          
          
        </tr>
        <tr>
            <td><input type="submit" value="Crear usuario" class="submit" onclick="window.location='http://localhost/CodeIgniter/index.php/consulta/nuevo'"/></td>
          <td><input type="submit" value="Borrar usuario" class="submit" onclick="window.location='http://localhost/CodeIgniter/index.php/consulta/nuevoborrar'"/></td>
          
        </tr>
        <tr>
            <th><center>Modificar usuario</center></th>
          <th><center>Obtener usuarios</center></th>
          
        </tr>
        <tr>
          <td><input type="submit" value="Modificar usuario" class="submit" onclick="window.location='http://localhost/CodeIgniter/index.php/consulta/nuevoact'"/></td>
          <td><input type="submit" value="Ver usuarios" class="submit" onclick="window.location='http://localhost/CodeIgniter/index.php/consulta'"/></td>
          
        </tr>
      </table>
    </div>
    </body>
</html>