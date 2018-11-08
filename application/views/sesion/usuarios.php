<!DOCTYPE html>
<?php

foreach ($usuarios->result_array() as $usuario){ 
    echo'<ul>';
    echo '<li>'.$usuario['usuario'].'</li>';
    echo '<li>'.$usuario['password'].'</li>';
    echo '<li>'.$usuario['tipo'].'</li>';
    echo'</ul>';
} 

?>