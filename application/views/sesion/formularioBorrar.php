<html>
<?= form_open('/consulta/borrar')?>
<?php
$id_user=array(
    'name' => 'id_user',
    'placeholder' => 'Escribe el id'
);

?>
    
        <?= form_label('Id: ','id_user')?>
        <?= form_input($id_user)?>
    <br/> <br/>
    
    
<?= form_submit('','borrar usuario')?>
<?= form_close()?>

</body>
</html>