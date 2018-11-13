<!DOCTYPE html>
<html>
    <head>
        <title>Formulario</title>
        <link rel = "stylesheet" type = "text/css" 
              href = "<?php echo base_url(); ?>css/style.css">
        <link href="https://fonts.googleapis.com/css?family=handlee" rel="stylesheet">
    </head>

    <?= form_open('/consulta/recibirdatos') ?>
    <?php
    $usuario = array(
        'name' => 'usuario',
        'placeholder' => 'Escribe tu usuario'
    );
    $password = array(
        'name' => 'password',
        'placeholder' => 'Escribe la contraseña',
        'type' => 'password'
    );
    ?>
    <body>
    <center>
        <div class="section">    
            <h3><?= form_label('Usuario: ', 'usuario') ?></h3>
            <?= form_input($usuario) ?>
            <br/>

            <h3><?= form_label('Password: ', 'password') ?></h3>
            <?= form_input($password) ?>
            <br/>
            <h3>Tipo de usuario:</h3>
            <select name="tipo">
                <option value=""> Seleccione un usuario </option>
                <option value="A"> Administrador</option>
                <option value="U"> Usuario </option>
            </select> <br/><br/>

            <input type="submit" value="Aceptar" class="crearUsuario"/>
        </div></center>
    <?= form_close() ?>

</body>
</html>

