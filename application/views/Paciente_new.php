<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>HCEFisiored</title>
        <?php
        $this->load->view("templates/header.php");
        ?>
    </head>
    <body>
        <?php $this->load->view("templates/navbar.php"); ?>
        <div class="container-fluid contenedor">
            <div class="row">
                <?php $this->load->view("templates/sidebar.php"); ?>
                <main role="main" class="pt-3 px-4">
                    
                        <div class="titulo row">
                            <h2 class="h2 col-md-12">Nuevo Paciente</h2>
                        </div>
                        <hr>
                    <form action="" class="pacientesForm">    
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlInput1">Nombres:</label>
                                <input type="text" class="form-control" id="nombres">
                                <label for="exampleFormControlInput1">Apellido Paterno:</label>
                                <input type="text" class="form-control" id="apePat">
                                <label for="exampleFormControlInput1">Apellido Materno:</label>
                                <input type="text" class="form-control" id="apeMat">
                                <label for="exampleFormControlSelect1">Tipo de Documento:</label>
                                <select class="form-control" id="tipoDocumento">
                                    <option>DNI</option>
                                    <option>Carnet de Extranjeria</option>
                                    <option>Otros</option>
                                    <option>Pasaporte</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <form action="upload.php" method="post" enctype="multipart/form-data">
                                    <input id="uploadImage" type="file" accept="image/*" name="image" />
                                    <div id="preview"><img src="filed.png" /></div><br>
                                    <input class="btn btn-success" type="submit" value="Subir">
                                </form>
                            </div>
                        </div>
                        <div class="form-row">
                            <label for="exampleFormControlInput1">N° Documento:</label>
                            <input type="text" class="form-control" id="nombres">
                            <label for="exampleFormControlInput1">Fecha Nacimiento:</label>
                            <input type="text" class="form-control" id="fecNac">
                        </div>
                        <div class="form-row">
                            <label for="exampleFormControlInput1">Ocupación:</label>
                            <input type="text" class="form-control" id="nombres">
                            <label for="exampleFormControlInput1">Organización:</label>
                            <input type="text" class="form-control" id="organizacion">
                        </div>
                        <div class="form-row">
                            <label for="exampleFormControlInput1">Edad:</label>
                            <input type="text" class="form-control" id="nombres">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="sexoM">Masculino</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="sexoF">Femenino</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <label for="exampleFormControlInput1">Correo:</label>
                            <input type="text" class="form-control" id="nombres">
                            <label for="exampleFormControlInput1">Teléfono:</label>
                            <input type="text" class="form-control" id="telefono">
                        </div>
                        </div>
                    </form>                                 
                </main>
            </div>
        </div>
        <?php
        $this->load->view("templates/resources.php");
        ?>
    </body>
</html>
