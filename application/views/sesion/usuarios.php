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

foreach ($result->result_array() as $resultado){ 
    echo'<ul>';
    echo'<h6>';
    echo '<li>'.$resultado['usuario'].'</li>';
    echo '<li>'.$resultado['password'].'</li>';
    echo '<li>'.$resultado['tipo'].'</li>';
    echo '</h6>';
    echo'</ul>';
} 

?>
    </body>
</html>