<html>
<?= form_open('/consulta/actualizar')?>
<?php
$id_user=array(
    'name' => 'id_user',
    'placeholder' => 'Escribe el id'
);
$usuario=array(
    'name' => 'usuario',
    'placeholder' => 'Escribe tu usuario'
);
$password=array(
    'name' => 'password',
    'placeholder' => 'Escribe la contraseña',
    'type' => 'password'
);
$tipo=array(
    'name' => 'tipo',
    'placeholder' => 'Tipo de usuario'
);

?>
    <p>Id del registro a cambiar:</p></br>
        <?= form_label('Id: ','id_user')?>
        <?= form_input($id_user)?>
    </br> </br></br>
    
    <p>Escriba los nuevos datos del usuario: </p></br>
    <?= form_label('Usuario: ','usuario')?>
        <?= form_input($usuario)?>
    </br> </br>
    
        <?= form_label('Password: ','password')?>
        <?= form_input($password)?>
    </br> </br>
    
        <?= form_label('Tipo: ','tipo')?>
        <?= form_input($tipo)?>
    </br> </br>
    
    
<?= form_submit('','Actualizar usuario')?>
<?= form_close()?>

</body>
</html>