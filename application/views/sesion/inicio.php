<html>
<?= form_open('/consulta/sesion')?>
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
?>
    
        <?= form_label('Usuario: ','usuario')?>
        <?= form_input($usuario)?>
    </br> </br>
    
        <?= form_label('Password: ','password')?>
        <?= form_input($password)?>
    </br> </br>
    
    
<?= form_submit('','Iniciar sesion')?>
<?= form_close()?>

</body>
</html>
