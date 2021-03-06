<!DOCTYPE html>
<html>
    <head>
        <title>Inicio de sesion</title>
        <link rel = "stylesheet" type = "text/css" 
   href = "<?php echo base_url('sources/css/estilos.css'); ?>">        
       <link rel="icon" href="<?php echo base_url('sources/fonts/fire-2-32.ico')?>">
        
    </head>
    <body>

    <center>
       
        <div class="section">
            <h1><span>Inicio sesion</span></h1><br/>
            <svg class="face" height="100" width="100">
            <circle cx="50" cy="50" r="50" fill="#FDD835"/>
            <circle cx="30" cy="30" r="10" fill="#FFFFFF"/>
            <circle cx="70" cy="30" r="10" fill="#FFFFFF"/>
            <circle cx="30" cy="30" r="5" fill="#000000"/>
            <circle cx="70" cy="30" r="5" fill="#000000"/>
            <path d="M 30 70 q 20 20 40 0" stroke="#FFFFFF" stroke-width="5" fill="none"/>
            </svg><br/>
            
            <?= form_open('/consulta/iniciosesion') ?>
            <form name="myform">
                <input name="usuario" placeholder="Usuario" type="text" required/><br/><br/>
                <input name="password" placeholder="Contraseña" type="password" required/><br/><br/>
                <!--<select name="tipo" required>
                    <option value=""> Seleccione un usuario </option>
                    <option value="A"> Administrador</option>
                    <option value="U"> Usuario </option>
                </select> <br/><br/>-->
                <input type="submit" value="Aceptar" class="submit"/>
            </form>


        </div>
    </center>

        <?= form_close() ?>

    </body>
</html>