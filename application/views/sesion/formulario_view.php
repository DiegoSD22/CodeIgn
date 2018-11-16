<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blog</title>
        <link rel="stylesheet" href="<?php echo base_url("css/bootstrap.min.css"); ?>">
    </head>
    <body>
        <h3 style="text-align: center;">CODEIGNITER AJAX</h3>
        <div class="row">
            <div class="alert alert-success" id="message" style="display: none;">
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <?= form_open('/formulario/registre') ?>
                <div class="form-group">
                    <label>EMAIL:</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="EMAIL">
                </div>
                <input type="submit" value="Enviar" id="btn">
                <?= form_close() ?>
            </div>
        </div>
        <script type="text/javascript" src="<?php echo base_url() ?>js/jquery-3.1.1.js"></script>
        <script>
    $(function(){
        $( "#btn" ).click(function(event)
        {
            event.preventDefault();
            var email= $("#email").val();

            $.ajax(
                {
                    type:"post",
                    url: "<?php echo base_url(); ?>index.php/formulario/registre",
                    data:{ email:email},
                    success:function(response)
                    {
                        console.log(response);
                        $("#message").html(response);
                        $('#cartmessage').show();
                    }
                    error: function() 
                    {
                        alert("Invalide!");
                    }
                }
            );
        });
    });
</script>
    </body>
</html>