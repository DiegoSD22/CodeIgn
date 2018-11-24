<!DOCTYPE html>
<html>
    <head>
        <title>Usuarios</title>
             <link rel = "stylesheet" type = "text/css" 
   href = "<?php echo base_url(); ?>sources/css/estilos.css">
        <link href="https://fonts.googleapis.com/css?family=handlee" rel="stylesheet">
    </head>
    <body>
<?php

foreach ($usuarios->result_array() as $usuario){ 
    echo'<ul>';
    echo'<h6>';
    echo '<li>'.$usuario['usuario'].'</li>';
    echo '<li>'.$usuario['password'].'</li>';
    echo '<li>'.$usuario['tipo'].'</li>';
    echo '</h6>';
    echo'</ul>';
} 

?>
    </body>
</html>