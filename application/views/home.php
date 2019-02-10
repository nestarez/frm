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

                    Home - <?php echo site_url() . "<br>" . base_url(); ?>

                </main>
            </div>
        </div>
        <?php
        $this->load->view("templates/resources.php");
        ?>
    </body>
</html>
