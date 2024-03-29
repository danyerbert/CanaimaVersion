<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/Canaima.png">

    <title><?php echo company; ?></title>

    <?php include "inc/header.php" ?>
</head>

<body id="page-top">

    <?php
    $peticionAjax = false;
    require_once "Controllers/VistasControlador.php";

    $iv = new VistasControlador();

    $vistas = $iv->obtener_vistas_controlador();
    if ($vistas == "login" || $vistas == "404") {
        require_once "./content/" . $vistas . "-view.php";
    } else {
    ?>

        <!-- Page Wrapper -->
        <div id="wrapper">

            <?php include "inc/navbarlateral.php"; ?>
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <?php
                    include "inc/navbar.php";
                    include $vistas;
                    ?>

                </div>

                <!-- End of Main Content -->

                <?php include "inc/footter.php" ?>

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="config/logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>

    <?php
    }
    include "inc/script.php"
    ?>

</body>

</html>