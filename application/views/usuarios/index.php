<div class="container">
    <h3>Lista de usuarios</h3>
    <div class="alert alert-success" style="display: none;">
        
    </div>
    <button id="btnAdd" class="btn btn-success">Agregar nuevo</button>
    <table class="table table-bordered table-responsive" style="margin-top: 20px">
        <thead>
            <tr>
                <td>ID_user</td>
                <td>Usuario</td>
                <td>Password</td>
                <td>Tipo</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody id="mostrardatos">

        </tbody>
    </table>
</div>

<div id="myModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="myForm" action="" method="post" class="form-horizontal">
                    <input type="hidden" name="txtId" value="0">
                    <div class="form-group">
                        <label for="usuario" class="label-control col-md-4">Nombre usuario:</label>
                        <div class="col-md-8">
                            <input type="text" name="txtUsuario" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="label-control col-md-4">Password:</label>
                        <div class="col-md-8">
                            <input type="password" name="txtPassword" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tipo" class="label-control col-md-4">Tipo:</label>
                        <div class="col-md-8">
                            <select name="txtTipo" class="form-control" required>
                                <option value=""> Seleccione un usuario </option>
                                <option value="A"> Administrador</option>
                                <option value="U"> Usuario </option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" id="btnSave" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>

<div id="deleteModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirmar borrar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Seguro que quieres borrar el usuario
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" id="btnDelete" class="btn btn-danger">Borrar</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(function () {
        mostrarUsuarios();
        //Agregar usuario
        $('#btnAdd').click(function () {
            $('#myModal').modal('show');
            $('#myModal').find('.modal-title').text('Agregar nuevo usuario');
            $('#myForm').attr('action', '<?php echo base_url("/index.php/usuarios/agregarUsuario")?>');
        });

        $('#btnSave').click(function () {
            var url = $('#myForm').attr('action');
            var data = $('#myForm').serialize();
            //Validar form
            var usuario = $('input[name=txtUsuario]');
            var password = $('input[name=txtPassword]');
            var tipo = $('select[name=txtTipo]');
            var result = '';
            if (usuario.val() === '') {
                usuario.parent().parent().addClass('error');
            } else {
                usuario.parent().parent().removeClass('error');
                result += '1';
            }
            if (password.val() === '') {
                password.parent().parent().addClass('error');
            } else {
                password.parent().parent().removeClass('error');
                result += '2';
            }
            if (tipo.val() === '') {
                tipo.parent().parent().addClass('error');
            } else {
                tipo.parent().parent().removeClass('error');
                result += '3';
            }
            if (result === '123') {
                $.ajax({
                    type: 'ajax',
                    method: 'post',
                    url: url,
                    data: data,
                    async: false,
                    dataType: 'json',
                    success: function (response) {
                        if (response.success) {
                            $('#myModal').modal('hide');
                            $('#myForm')[0].reset();
                            if(response.type=='add'){
                                var type="agregado";
                            }else if(response.type=='act'){
                                var type="actualizado";
                            }
                            $('.alert-success').html('Usuario '+type+' con exito').fadeIn().delay(4000).fadeOut('slow');
                            mostrarUsuarios();
                        } else {
                            alert('error');
                        }
                    },
                    error: function () {
                        alert('No se puede agregar el usuario');
                    }
                });
            }
        });
        
        //Para editar usuarios
        $('#mostrardatos').on('click', '.item-edit', function() {
            var id=$(this).attr('data');
            $('#myModal').modal('show');
            $('#myModal').find('.modal-title').text('Editar usuario');
            $('#myForm').attr('action', '<?php echo base_url("/index.php/usuarios/actualizarUsuario")?>');
            $.ajax({
               type: 'ajax',
               method: 'get',
               url: '<?php echo base_url("/index.php/usuarios/editarUsuario")?>',
               data: {id_user:id_user},
               async: false,
               dataType: 'json',
               success: function (data) {
                        $('input[name=txtUsuario]').val(data.usuario);
                        $('input[name=txtPassword]').val(data.password);
                        $('input[name=txtId]').val(data.id_user);
                    },
               error: function () {
                        alert('No se puede editar el usuario');
                    }
            });
});

        //Para borrar usuarios
        $('#mostrardatos').on('click', '.item-delete', function() {
        var id=$(this).attr('data');
        $('#deleteModal').modal('show');
        $('#btnDelete').unbind().click(function() {
            $.ajax({
               type: 'ajax',
               method: 'get',
               async: false,
               url: '<?php echo base_url("/index.php/usuarios/borrarUsuarios") ?>',
               data: {id_user:id_user},
               dataType: 'json',
               success: function (response) {
                        if(response.success){
                            $('#delteModal').modal('hide');
                            $('.alert-success').html('Usuario borrado con exito').fadeIn().delay(4000).fadeOut('slow');
                            mostrarUsuarios();
                        }else{
                            alert('Error');
                        }
                    },
               error: function () {
                        alert('No se puede borrar el usuario');
                    }
            });
});
    
});

        //Funcion para mostrar usuarios
        function mostrarUsuarios() {
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url("/index.php/usuarios/mostrarUsuarios") ?>',
                
                dataType: 'json',
                
                success: function (data) {
                    
                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<tr>' +
                                '<td>' + data[i].id_user + '</td>' +
                                '<td>' + data[i].usuario + '</td>' +
                                '<td>' + data[i].password + '</td>' +
                                '<td>' + data[i].tipo + '</td>' +
                                '<td>' +
                                '<a href="javascript:;" class="btn btn-info item-edit" data="' + data[i].id_user + '">Edit</a>' +
                                '<a href="javascript:;" class="btn btn-danger item-delete" data="' + data[i].id_user + '">Delete</a>' +
                                '</td>' +
                                '</tr>';
                    }
                    $('#mostrardatos').html(html);
                },
                error: function () {
                    alert('No se puede obtener datos de la base de datos');
                }
            });
        }
    });
</script>