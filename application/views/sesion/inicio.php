<html>
<?= form_open('/consulta/iniciosesion')?>
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
    'name'=>'tipo',
    
)
?>
    
        <?= form_label('Usuario: ','usuario')?>
        <?= form_input($usuario)?>
    <br/> <br/>
    
        <?= form_label('Password: ','password')?>
        <?= form_input($password)?>
    <br/> <br/>
    
    <select name="tipo">
        <option value=""> Seleccione un usuario </option>
        <option value="A"> Administrador</option>
        <option value="U"> Usuario </option>
    </select> <br/> <br/>
    
    
<?= form_submit('','Iniciar sesion')?>
<?= form_close()?>

</body>
</html>