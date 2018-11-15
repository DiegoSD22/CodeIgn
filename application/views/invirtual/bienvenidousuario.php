<!DOCTYPE html>
<html>
    <head>
        <title>Usuario</title>
        <meta charset="UTF-8">
        <link rel = "stylesheet" type = "text/css" 
   href = "<?php echo base_url(); ?>css/otro.css">
        <link href="https://fonts.googleapis.com/css?family=handlee" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
/**
 * Funcion para cambiar el color de fondo
 * Tiene que recibir el objeto "this"
 */
function changeColor(x)
{
    if(x.style.background=="rgb(247, 211, 88)")
    {
        x.style.background="#ffffff";
    }else{
        x.style.background="#F7D358";
    }
    return false;
}
    $(document).ready(function() { /* Cualquier funcionalidad que queramos agregar a la página por medio de jQuery, debe ser incluida cuando el documento está listo para recibir acciones que modifiquen el DOM de la página. */
  $('.azul').click(function(event) { /* Seleccionamos el elemento que queremos que realice la función */
    $('body').css('background', '#08c'); /* La función a realizar añadir CSS al body previamente seleccionado */
  });
  $('.verde').click(function(event) { /* Seleccionamos el elemento que queremos que realice la función */
    $('body').css('background', '#39b955'); /* La función a realizar añadir CSS al body previamente seleccionado */
  });
  $('.blanco').click(function(event) { /* Seleccionamos el elemento que queremos que realice la función */
    $('body').css('background', '#fff'); /* La función a realizar añadir CSS al body previamente seleccionado */
  });
});
</script>

    </head>
    <body class="white">
        <h1>Bienvenido usuario: <?=$usuario?></h1>
    
        <input type="submit" value="Cambiar color" class="submit" onclick="changeColor(this);"/>
        <input type="submit" value="Azul" class="azul"/>
        <input type="submit" value="Verde" class="verde"/>
        <input type="submit" value="Blanco" class="blanco"/>
    </body>
</html>

