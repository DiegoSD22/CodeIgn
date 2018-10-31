<html>
<?= form_open('/consulta/recibirdatos')?>
<?php
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
    
        <?= form_label('Usuario: ','usuario')?>
        <?= form_input($usuario)?>
    </br> </br>
    
        <?= form_label('Password: ','password')?>
        <?= form_input($password)?>
    </br> </br>
    
        <?= form_label('Tipo: ','tipo')?>
        <?= form_input($tipo)?>
    </br> </br>
    
<?= form_submit('','Subir usuario')?>
<?= form_close()?>

</body>
</html>

