<!DOCTYPE html>
<html>
    <head>
        <title>Formulario</title>
        <link rel = "stylesheet" type = "text/css" 
              href = "<?php echo base_url(); ?>css/style.css">
        <link href="https://fonts.googleapis.com/css?family=handlee" rel="stylesheet">
    </head>
    <?= form_open('/consulta/borrar') ?>
    <?php
    $id_user = array(
        'name' => 'id_user',
        'placeholder' => 'Escribe el id'
    );
    ?>
    <body>
    <center>
        <div class="section">
            <p><h2>Id del registro a borrar:</h2>
            <?= form_input($id_user) ?>
            <br/> <br/>


            <input type="submit" value="Borrar" class="crearUsuario"/>
        </div></center>
    <?= form_close() ?>

</body>
</html>