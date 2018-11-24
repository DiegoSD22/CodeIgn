<!DOCTYPE html>
<html>
    <head>
        <title>Usuario</title>
        <meta charset="UTF-8">
        <link rel = "stylesheet" type = "text/css" 
   href = "<?php echo base_url(); ?>sources/css/otro.css">
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
    $(document).ready(function() { 
  $('.azul').click(function(event) { 
    $('body').css('background', '#08c'); 
  });
  $('.verde').click(function(event) { 
    $('body').css('background', '#39b955'); 
  });
  $('.blanco').click(function(event) { 
    $('body').css('background', '#fff'); 
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

