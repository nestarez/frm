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
                    <form action="" class="pacientesForm">
                        <div class="titulo row">
                            <h2 class="h2 col-md-12">Pacientes</h2>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group row">
                                    <label for="pacienteFiltro" class="col-form-label col-md-2">Nombre:</label>                        
                                    <input type="text" class="form-control col-md-8" id="pacienteFiltro" />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group row">
                                    <button type="submit" class="btn btn-outline-success col-md-10">Buscar</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group row">
                                    <button type="button" class="btn btn-outline-danger col-md-10">Limpiar</button>
                                </div>
                            </div>                                   
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group row">
                                    <label for="dctoFiltro" class="col-form-label col-md-2">N° Documento:</label>                        
                                    <input type="text" class="form-control col-md-8" id="dctoFiltro" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <button type="submit" class="btn btn-outline-success col-md-11">+ Agregar</button>
                                </div>
                            </div>                               
                        </div>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <table class="table table-sm table-hover table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Handle</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td colspan="2">Larry the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>                                                               
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