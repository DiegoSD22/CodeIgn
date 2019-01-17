<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Creación de PDF</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('sources/css2/bootstrap.min.css')?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('sources/css2/bootstrap.css')?>">     
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
                        <a href="<?php echo base_url() ?>index.php/pdfs/generarmpdf" class="btn btn-outline-info">Crear PDF mPDF</a>
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
                        
                        <hr class="featurette-divider">
                        <div class="col-lg-12">
                        <div class="table is-bordered is-centered">
                            <table class="table table-striped table-bordered table-hover" style="margin-top: 20px">
                                <thead class="thead-dark">
                                    <tr class="info">
                                        <th scope="col">Descripción</th>
                                        <th scope="col">TCPDF</th>
                                        <th scope="col">mPDF</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                <td>Support HTML & CSS</td>
                                <td><b><center>&checkmark;</center></b></td>
                                <td><b><center>&checkmark;</center></b></td>
                                    </tr>
                                    <tr>
                                        <td>Links</td>
                                        <td><b><center>&checkmark;</center></b></td>
                                        <td><b><center>&checkmark;</center></b></td>
                                    </tr>
                                    <tr>
                                        <td>Copy paste</td>
                                        <td><b><center>&checkmark;</center></b></td>
                                        <td><b><center>&chi;</center></b></td>
                                    </tr>
                                    <tr>
                                        <td>Password</td>
                                        <td><b><center>&checkmark;</center></b></td>
                                        <td><b><center>&checkmark;</center></b></td>
                                    </tr>
                                    <tr>
                                        <td>Read only</td>
                                        <td><b><center>&checkmark;</center></b></td>
                                        <td><b><center>&chi;</center></b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        </div>
                </body>
                </html>
