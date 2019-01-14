<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Creación de PDF</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('sources/css2/bootstrap.min.css') ?>">     
                </head>
                <body>
                    <div class="container">
                        <h2 style="text-align: center">Imprime tus localidades</h2>
                        <form method="post" action="<?= base_url() ?>index.php/pdfs/generar" />
                        <table align="center">
                            <tr>
                                <td>
                                    <select class="btn btn-outline-info"name="provincia" id="provincia">
                                        <option value="">Selecciona tu provincía</option>
                                        <?php
                                        //Para buscar en la BD las provincias existentes
                                        foreach ($provincias as $fila) {
                                            ?>
                                            <option value=<?= $fila->id ?>><?= $fila->provincia ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" colspan="7">
                                    <hr />
                                    <input class="btn btn-outline-danger"type="submit" value="Crear PDF" title="Crear PDF" />
                                </td>
                            </tr>
                        </table>
                        </form>
                    </div>

                    <hr class="featurette-divider">
                        <!--Subir archivos-->
                        <div class="container">
                            <div class="row featurette">
                                <div class="col-md-7">
                                    <form enctype="multipart/form-data" action="<?= base_url() ?>index.php/pdfs/upload" method="POST">
                                        <input name="uploadedfile" type="file" />
                                        <input class="btn btn-outline-dark" type="submit" value="Subir archivo" />
                                    </form>
                                </div>
                            </div>
                        </div>
                </body>
                </html>
