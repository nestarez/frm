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
                    <form action="" class="tratamientosForm">
                        <div class="titulo row">
                            <h2 class="h2 col-md-12">Tratamientos</h2>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group row">
                                    <label for="pacientesFiltro" class="col-form-label col-md-2">Paciente:</label>                        
                                    <input type="text" class="form-control col-md-8" id="pacientesFiltro" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group row">
                                    <button type="button" class="btn btn-outline-primary col-md-10">Buscar</button>
                                </div>
                            </div>                                   
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group row">
                                    <label for="empresasFiltro" class="col-form-label col-md-2">Institución:</label>                        
                                    <input type="text" class="form-control col-md-8" id="empresasFiltro" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group row">
                                    <button type="submit" class="btn btn-outline-primary col-md-10">Limpiar</button>
                                </div>
                            </div>                               
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label for="empleadoFiltro" class="col-form-label col-md-4">Encargado:</label>
                                    <select class="form-control col-md-8" id="empleadoFiltro">
                                        <option>Pepe Morales</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label for="estadoFiltro" class="col-form-label col-md-2">Estado:</label>
                                    <select class="form-control col-md-6" id="estadoFiltro">
                                        <option>Programado</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group row">
                                    <button type="submit" class="btn btn-outline-primary col-md-10">Programar nuevo tratamiento</button>
                                </div>
                            </div>                               
                        </div>
                        <div class="row">
                            <div class="col-md-12">
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