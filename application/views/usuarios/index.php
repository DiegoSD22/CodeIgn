<div class="container">
    <div class="messages">
        <div class="message -left">

            <div class="balloon from-left">
                <p>Lista de usuarios</p>
            </div>
        </div>
        <div class="message -right">
            <div class="alert alert-success" style="display: none;">


            </div>
            <div class="alert alert-danger" style="display: none;">

            </div>
            <button id="btnAdd" class="btn btn-success shake-slow">Agregar nuevo</button>
            <a href="<?php echo base_url() ?>index.php/consulta/cerrarSesion" class="btn btn-warning"> Cerrar sesión </a>
            <!--<button id="btnCerrar" class="btn btn-warning">Cerrar sesion</button>-->
            <hr class="featurette-divider">
            <div>
                <form>
                    Buscar dentro de la tabla  <input class="input" id="searchTerm" type="text" onkeyup="doSearch()" />
                </form>
            </div>


            <div class="table is-bordered is-centered">
                <table class="table table-striped table-bordered table-hover" id="datos" style="margin-top: 20px">
                    <thead class="thead-dark">
                        <tr class="info">
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
            
            
        </div>


        <div id="myModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" id="tache">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="myForm" action="" method="post" class="form-horizontal">
                            <input type="hidden" name="txtId" value="0">
                            <div class="form-group">
                                <label for="usuario" class="label-control col-md-4">Nombre usuario:</label>
                                <div class="col-md-8">
                                    <input type="text" name="txtUsuario" class="input" size="30"
                                           onclick="comprueba(this)"
                                           onfocus="comprueba(this)"
                                           onblur="comprueba(this)"
                                           onchange="comprueba(this)" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="label-control col-md-4">Password:</label>
                                <div class="col-md-8">
                                    <input type="password" name="txtPassword" id="txtPss" class="input" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tipo" class="label-control col-md-4">Tipo:</label>
                                <div class="col-md-8">
                                    <select name="txtTipo" class="input" required>
                                        <option value=""> Seleccione un usuario </option>
                                        <option value="Administrador"> Administrador</option>
                                        <option value="Usuario"> Usuario </option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="btnClose" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
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
                        ¿Seguro que quieres borrar el usuario?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" id="btnDelete" class="btn btn-danger">Borrar</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="cerrarModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Confirmar borrar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ¿Seguro que quieres cerrar la sesion?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" id="btnSalir" class="btn btn-danger">Salir</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(function () {
                mostrarUsuarios();
                var clicksu = 0;
                var clicksp = 0;
                var clickst = 0;
                
                //Cerrar sesion
                $('#btnCerrar').click(function () {
                    $('#cerrarModal').modal('show');
                    $('#cerrarModal').find('.modal-title').text('Cerrar sesion');

                });

                $('#btnSalir').click(function () {
                    $.ajax({
                        type: 'ajax',
                        method: 'get',
                        url: '<?php echo base_url("/index.php/consulta/cerrarSesion") ?>',
                        data: data,
                        async: false,
                        dataType: 'json',
                        success: function (data) {
                            alert('Sesion cerrada');
                        },
                        error: function () {
                            alert('No se puede cerrar la sesion');
                        }
                    });

                });

                //Agregar usuario
                $('#btnAdd').click(function () {
                    $('#myModal').modal('show');
                    $('#myModal').find('.modal-title').text('Agregar nuevo usuario');
                    $('#myForm')[0].reset();
                    $('#myForm').attr('action', '<?php echo base_url("/index.php/usuarios/agregarUsuario") ?>');
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
                        usuario.addClass('input is-error');
                        if (clicksu == 0) {
                            usuario.after("<p style='color:red' id='usuReq'>El campo usuario es obligatorio</p>");
                            clicksu = 1;
                        }

                    } 
                    else {
                        usuario.removeClass('is-error');
                        $('#usuReq').remove();
                        result += '1';
                    }
                    if (password.val().length <= 7) {
                        password.addClass('input is-error');
                        if (clicksp == 0) {
                            password.after("<p style='color:red' id='passReq'>Los caracteres minimos son 8</p>");
                            clicksp++;
                        }

                    } else {
                        password.removeClass('is-error');
                        $('#passReq').remove();
                        result += '2';
                    }
                    if (tipo.val() === '') {
                        tipo.addClass('input is-error');
                        if (clickst == 0) {
                            tipo.after("<p style='color:red' id='tipoReq'>Debe seleccionar un tipo de usuario</p>");
                            clickst++;
                        }

                    } else {
                        tipo.removeClass('is-error');
                        $('#tipoReq').remove();
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
                                    if (response.type === 'add') {
                                        var type = "creado";
                                    } else if (response.type === 'act') {
                                        var type = "actualizado";
                                    }
                                    $('.alert-success').html('Usuario ' + type + ' con exito').fadeIn().delay(4000).fadeOut('slow');
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

                //Para limpiar el formulario al darle cancelar
                $('#btnClose').click(function () {

                    //Validar form
                    var usuario = $('input[name=txtUsuario]');
                    var password = $('input[name=txtPassword]');
                    var tipo = $('select[name=txtTipo]');
                    var result = '';



                    usuario.removeClass('is-error');
                    $('#usuReq').remove();
                    clicksu = 0;



                    password.removeClass('is-error');
                    $('#passReq').remove();
                    clicksp = 0;


                    tipo.removeClass('is-error');
                    $('#tipoReq').remove();
                    clickst = 0;


                });

                //Para limpiar el formulario al darle el tache
                $('#tache').click(function () {

                    //Validar form
                    var usuario = $('input[name=txtUsuario]');
                    var password = $('input[name=txtPassword]');
                    var tipo = $('select[name=txtTipo]');
                    var result = '';



                    usuario.removeClass('is-error');
                    $('#usuReq').remove();
                    clicksu = 0;



                    password.removeClass('is-error');
                    $('#passReq').remove();
                    clicksp = 0;


                    tipo.removeClass('is-error');
                    $('#tipoReq').remove();
                    clickst = 0;


                });


                //Para editar usuarios
                $('#mostrardatos').on('click', '.item-edit', function () {
                    var id_user = $(this).attr('data');
                    $('#myModal').modal('show');
                    $('#myModal').find('.modal-title').text('Editar usuario');
                    $('#myForm').attr('action', '<?php echo base_url("/index.php/usuarios/actualizarUsuario") ?>');
                    $.ajax({
                        type: 'ajax',
                        method: 'get',
                        url: '<?php echo base_url("/index.php/usuarios/editarUsuario") ?>',
                        data: {id_user: id_user},
                        async: false,
                        dataType: 'json',
                        success: function (data) {
                            $('input[name=txtUsuario]').val(data.usuario);
                            $('input[name=txtPassword]').val(data.password);
                            $('select[name=txtTipo]').val(data.tipo);
                            $('input[name=txtId]').val(data.id_user);
                        },
                        error: function () {
                            alert('No se puede editar el usuario');
                        }
                    });
                });

                //Para borrar usuarios
                $('#mostrardatos').on('click', '.item-delete', function () {
                    var id_user = $(this).attr('data');
                    $('#deleteModal').modal('show');
                    $('#btnDelete').unbind().click(function () {
                        $.ajax({
                            type: 'ajax',
                            method: 'get',
                            async: false,
                            url: '<?php echo base_url("/index.php/usuarios/borrarUsuario") ?>',
                            data: {id_user: id_user},
                            dataType: 'json',
                            success: function (response) {
                                if (response.success) {
                                    $('#deleteModal').modal('hide');
                                    $('.alert-danger').html('El usuario fue eliminado').fadeIn().delay(4000).fadeOut('slow');
                                    mostrarUsuarios();
                                } else {
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
                        url: '<?php echo base_url("/index.php/usuarios/PruebaSP") ?>',

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
                                        '<div class="btn-group" role="group" aria-label="Basic example">' +
                                        '<a href="javascript:;" class="btn btn-info btn-sm item-edit" data="' + data[i].id_user + '">Edit</a>' +
                                        '   ' +
                                        '<a href="javascript:;" class="btn btn-danger btn-sm item-delete" data="' + data[i].id_user + '">Delete</a>' +
                                        '</div>' +
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

        <script>
            function comprueba(obj) {
                if (obj.value == '') {
                    if ((document.all) || (document.getElementById)) {
                        obj.style.backgroundColor = '#ddd';

                    }
                } else {
                    if ((document.all) || (document.getElementById)) {
                        obj.style.backgroundColor = '#FFFFFF';
                    }
                }
            }
        </script>

<!--<script>
    var usuario = $('input[name=txtUsuario]');
    usuario.after("<p style='color:red'>the max length of 50 characters is reached, you typed in xx characters</p>");
    </script>-->

<!--<script>
        function valida(){
                if(document.getElementById("txtPss").value.length <= 7){
                        alert('ingrese una contraseña de minimo 8 caracteres');
                        return false;
                }else{
                                document.form1.submit();
                }
        }
</script>-->

        <script>
            function doSearch()
            {
                var tableReg = document.getElementById('datos');
                var searchText = document.getElementById('searchTerm').value.toLowerCase();
                var cellsOfRow = "";
                var found = false;
                var compareWith = "";

                // Recorremos todas las filas con contenido de la tabla
                for (var i = 1; i < tableReg.rows.length; i++)
                {
                    cellsOfRow = tableReg.rows[i].getElementsByTagName('td');
                    found = false;
                    // Recorremos todas las celdas
                    for (var j = 0; j < cellsOfRow.length && !found; j++)
                    {
                        compareWith = cellsOfRow[j].innerHTML.toLowerCase();
                        // Buscamos el texto en el contenido de la celda
                        if (searchText.length == 0 || (compareWith.indexOf(searchText) > -1))
                        {
                            found = true;
                        }
                    }
                    if (found)
                    {
                        tableReg.rows[i].style.display = '';
                    } else {
                        // si no ha encontrado ninguna coincidencia, esconde la
                        // fila de la tabla
                        tableReg.rows[i].style.display = 'none';
                    }
                }
            }
        </script>