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
                    <form action="" class="consultasForm">
                        <div class="titulo row">
                            <h2 class="h2 col-md-12">Consultas</h2>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group row ui-widget">
                                    <label for="pacientesFiltro" class="col-form-label col-md-2">Paciente:</label>                        
                                    <input type="text" class="form-control col-md-8" id="pacientesFiltro" />
                                    <input type="hidden" id="pacienteId"/>
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
                                    <?php 
                                    foreach($usuarios as $usuario){
                                        echo "<option value=" . $usuario["ID_Usuario"] . ">" . $usuario["Apellido_Pat"] . " " . $usuario["Nombres"] . "</option>";
                                    }
                                ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label for="estadoFiltro" class="col-form-label col-md-2">Estado:</label>
                                    <select class="form-control col-md-6" id="estadoFiltro">
                                    <?php 
                                    foreach($estadoVisitas as $estado){
                                        echo "<option value=" . $estado["id_estado_visita"] . ">" . " " . $estado["descripcion"] . "</option>";
                                    }
                                ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group row">
                                    <button type="submit" class="btn btn-outline-primary col-md-10">Programar nueva consulta</button>
                                </div>
                            </div>                               
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-sm table-hover table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" class="col-md-1">Código</th>
                                            <th scope="col" class="col-md-2">Paciente</th>
                                            <th scope="col" class="col-md-3">Institución</th>
                                            <th scope="col" class="col-md-1">Día y hora</th>
                                            <th scope="col" class="col-md-2">Encargado</th>
                                            <th scope="col" class="col-md-1">Estado</th>
                                            <th scope="col" class="col-md-2">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">C201901-0001</th>
                                            <td>Castillo Rojas Juan</td>
                                            <td>La Tarumba</td>
                                            <td>12//06/2018</td>
                                            <td>Huayta Susy</td>
                                            <td>Programada</td>
                                            <td class="row">
                                                <div class="col-md-4"> <i class="fas fa-2x fa-running"></i></div>
                                                <div class="col-md-4"> <i class="fas fa-2x fa-running"></i></div>
                                                <div class="col-md-4"> <i class="fas fa-2x fa-running"></i></div>
                                            </td>
                                        </tr>
                                        <tr>
                                        <th scope="row">C201901-0001</th>
                                            <td>Castillo Rojas Juan</td>
                                            <td>La Tarumba</td>
                                            <td>12//06/2018</td>
                                            <td>Huayta Susy</td>
                                            <td>Programada</td>
                                            <td class="row">
                                                <div class="col-md-4"> <i class="fas fa-2x fa-running"></i></div>
                                                <div class="col-md-4"> <i class="fas fa-2x fa-running"></i></div>
                                                <div class="col-md-4"> <i class="fas fa-2x fa-running"></i></div>
                                            </td>
                                        </tr>
                                        <tr>
                                        <th scope="row">C201901-0001</th>
                                            <td>Castillo Rojas Juan</td>
                                            <td>La Tarumba</td>
                                            <td>12//06/2018</td>
                                            <td>Huayta Susy</td>
                                            <td>Programada</td>
                                            <td class="row">
                                                <div class="col-md-4"> <i class="fas fa-2x fa-running"></i></div>
                                                <div class="col-md-4"> <i class="fas fa-2x fa-running"></i></div>
                                                <div class="col-md-4"> <i class="fas fa-2x fa-running"></i></div>
                                            </td>
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
        $this->load->view("templates/loading.php");
        ?>
        <script type="text/javascript" src="./utilitarios/js/pacienteJs.js"></script>
        <script type="text/javascript" src="./utilitarios/js/consultaJs.js"></script>
    </body>
</html>