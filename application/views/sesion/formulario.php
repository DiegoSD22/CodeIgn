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

?>
    
        <?= form_label('Usuario: ','usuario')?>
        <?= form_input($usuario)?>
    <br/> <br/>
    
        <?= form_label('Password: ','password')?>
        <?= form_input($password)?>
    <br/> <br/>
    Tipo de usuario:
        <select name="tipo">
        <option value=""> Seleccione un usuario </option>
        <option value="A"> Administrador</option>
        <option value="U"> Usuario </option>
    </select> <br/> <br/>
    
<?= form_submit('','Subir usuario')?>
<?= form_close()?>

</body>
</html>

