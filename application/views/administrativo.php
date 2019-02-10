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
                    <div class="titulo row">
                        <h2 class="h2 col-md-12">Administrativo</h2>
                    </div>
                    <hr>
                    <div class="card text-white bg-info mb-3">
                        <div class="card-header"><i class="fas fa-file-contract fa-2x"></i></div>
                        <div class="card-body">
                            <h5 class="card-title">Convenios</h5>
                            <p class="card-text">Registro, actualización y baja de convenios a realizar con organizaciones.</p>
                        </div>
                    </div>

                    <div class="card text-white bg-info mb-3">
                        <div class="card-header"><i class="fas fa-lock fa-2x"></i></i></div>
                        <div class="card-body">
                            <h5 class="card-title">Perfiles</h5>
                            <p class="card-text">Mantenimiento de los perfiles que se le asignarán a los usuarios para restringir los permisos a ciertos módulos.</p>
                        </div>
                    </div>

                </main>
            </div>
        </div>
        <?php
        $this->load->view("templates/resources.php");
        ?>
    </body>
</html>