<!DOCTYPE html>
<html>
    <head>
        <title>Formulario</title>
        <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>sources/css/estilos.css">
        <link href="https://fonts.googleapis.com/css?family=handlee" rel="stylesheet">
    </head>
    <?= form_open('/consulta/actualizar') ?>
    <?php
    $id_user = array(
        'name' => 'id_user',
        'placeholder' => 'Escribe el id'
    );
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
            <p><h2>Id del registro a cambiar:</h2>

            <input name="id_user" placeholder="Id del usuario" type="text" required/>
            <br/> <br/><br/>

            <p><h2>Escriba los nuevos datos del usuario: </h2><br/>

            <input name="usuario" placeholder="Usuario" type="text" required/>
            <br/> <br/>


            <input name="password" placeholder="Contraseña" type="password" required/>
            <br/> <br/>

            <h3>Tipo de usuario:</h3>
            <select name="tipo" required>
                <option value=""> Seleccione un usuario </option>
                <option value="A"> Administrador</option>
                <option value="U"> Usuario </option>
            </select> <br/> <br/>


            <input type="submit" value="Cambiar" class="crearUsuario"/>
        </div></center>
    <?= form_close() ?>

</body>
</html>