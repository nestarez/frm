<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
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
                    <form action="" class="usuariosForm">
                        <div class="titulo row">
                            <h2 class="h2 col-md-12">Usuarios</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-2 form-group">
                                <select class="form-control">
                                    <option>Prueba de Usuario 1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                            <div class="col-md-4"></div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-outline-primary col-md-8">Nuevo</button>
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-outline-primary col-md-8">Editar</button>
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-outline-primary col-md-8">Eliminar</button>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label for="usuarioIn" class="col-form-label col-md-3">Usuario:</label>                        
                                    <input type="text" class="form-control col-md-8" id="usuarioIn" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label for="tipDctoIn" class="col-form-label col-md-4">Tipo Dcto.:</label>
                                    <select class="form-control col-md-6" id="tipDctoIn">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label for="nroDctoIn" class="col-form-label col-md-4">Nro. Dcto.:</label>                        
                                    <input type="text" class="form-control col-md-6" id="nroDctoIn" />
                                </div>
                            </div>                                    
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label for="cargoIn" class="col-form-label col-md-3">Cargo:</label>                        
                                    <input type="text" class="form-control col-md-8" id="cargoIn" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label for="tipPerfIn" class="col-form-label col-md-4">Tipo de Perfil:</label>
                                    <select class="form-control col-md-6" id="tipPerfIn">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label for="fchNacimIn" class="col-form-label col-md-4">Fecha Nacim.:</label>                        
                                    <input type="text" class="form-control col-md-6" id="fchNacimIn" />
                                </div>
                            </div>                                    
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="nombreIn" class="col-form-label col-md-2">Nombres:</label>                        
                                    <input type="text" class="form-control col-md-9" id="nombreIn" />
                                </div>
                            </div>                                                                
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="apellIn" class="col-form-label col-md-2">Apellidos:</label>                        
                                    <input type="text" class="form-control col-md-9" id="apellIn" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label for="direcIn" class="col-form-label col-md-1">Domicilio:</label>                        
                                    <input type="text" class="form-control col-md-8" id="direcIn" />
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-2">
                                <div class="form-group row">
                                    <button type="submit" class="btn btn-outline-success col-md-10">Guardar</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group row">
                                    <button type="button" class="btn btn-outline-danger col-md-10">Cancelar</button>
                                </div>
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