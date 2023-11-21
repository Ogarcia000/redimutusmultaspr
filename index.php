<?php
session_start();

if (isset($_SESSION["user_id"]))
{
    $mysqli = require __DIR__ ."/config/db_conn.php";

    $sql = "SELECT * FROM usuarios WHERE id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PANEL USUARIO</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #1BA140;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <!-- <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div> -->
                <div class="sidebar-brand-text mx-3">TUS MULTAS PR</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Adicional
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="Multas_Info.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Multas Info </span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="Oficinas_LaboresCom.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Org. Labores Comunitarias</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Buscar multas..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn" type="button" style="background-color: #1BA140; color: white;">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= htmlspecialchars($user["name"]) ?></span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Configuraciones
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Actividades
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar Sesion
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="container-fluid mt-5">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"
                                data-toggle="modal" data-target="#registrarMultaModal">
                                <i class="fas fa-plus fa-sm text-white-50"></i> Registrar Multa
                            </a>
                        </div>

                        <!-- Modal para registrar multa -->
                        <div class="modal fade" id="registrarMultaModal" tabindex="-1" role="dialog"
                            aria-labelledby="registrarMultaModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="registrarMultaModalLabel">Registrar Multa</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="formularioMultas">
                                            <div class="mb-3">
                                                <label for="tipoMulta" class="form-label">Tipo de Multa:</label>
                                                <select id="tipoMulta" class="form-select" name="tipoMulta">
                                                    <option value="Alterar Certificado Inspeccion">Alterar un
                                                        certificado
                                                        de inspección</option>
                                                    <option value="Carreras O Regateo">Carreras o regateo</option>
                                                    <option value="Conducir Sin Licencia">Conducir sin llevar consigo la
                                                        licencia</option>
                                                    <option value="Estacionamiento Zona Impedido">Estacionarse en zona
                                                        de
                                                        impedido</option>
                                                    <option value="Linea Amarilla">Línea Amarilla</option>
                                                    <option value="No Utilizar Cinturon">No utilizar el cinturón
                                                    </option>
                                                    <option value="Obstruir AccesoImpedido">Obstruir acceso impedido
                                                    </option>
                                                    <option value="Pasar 100 Millas">Pasar las 100 millas</option>
                                                    <option value="Primera Vez Alcohol">Primera vez Alcohol</option>
                                                    <option value="Rebasar Luz Amarilla">Rebasar Luz amarilla</option>
                                                    <option value="Rebasar Luz Roja">Rebasar Luz Roja</option>
                                                    <option value="Saltar Pare">Saltar un pare</option>
                                                    <option value="Segunda Vez Alcohol">Segunda vez Alcohol</option>
                                                    <option value="Sobre La Acera">Sobre la acera</option>
                                                    <option value="Tercera Vez Alcohol">Tercera vez Alcohol</option>
                                                    <option value="Tirar Basura Via Publica">Tirar basura a la vía
                                                        pública
                                                    </option>
                                                    <option value="Uso Celular">Uso del celular</option>
                                                    <option value="Velocidad">Velocidad</option>
                                                    <option value="Viajar Menor Sin Proteccion">Viajar con un menor sin
                                                        la
                                                        debida protección</option>
                                                    <option value="Zona Escolar">Zona escolar</option>

                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label for="oficinaComunitaria" class="form-label">Oficina para Servicio
                                                    Comunitario:</label>
                                                <select id="oficinaComunitaria" class="form-select"
                                                    name="oficinaComunitaria">
                                                    <option value="LaFonditaDeJesus">La Fondita de Jesus</option>
                                                    <option value="SerDePuertoRico">Ser de Puerto Rico</option>
                                                    <option value="HogarSantaMariaEufrasia">Hogar Santa María Eufrasia
                                                    </option>
                                                    <option value="HogarInfantilJesusNazareno">Hogar Infantil Jesús
                                                        Nazareno</option>
                                                    <option value="HogarDeNinasDeCupey">Hogar de Niñas de Cupey</option>
                                                    <option value="FundacionRayitoDeEsperanza">Fundación Rayito de
                                                        Esperanza</option>
                                                    <option value="FundacionCAP">Fundación CAP</option>
                                                    <option value="ElComedorDeLaKennedy">El Comedor de la Kennedy
                                                    </option>
                                                    <option value="CorporacionMilagrosDelAmor">Corporación Milagros del
                                                        Amor</option>
                                                    <option value="CasaProtegidaJuliaDeBurgos">Casa Protegida Julia de
                                                        Burgos</option>
                                                    <option value="CasaJuanBosco">Casa Juan Bosco</option>
                                                    <option value="BancoDeAlimentosDePuertoRico">Banco de Alimentos de
                                                        Puerto Rico</option>
                                                    </option>

                                                </select>
                                            </div>


                                            <div class="mb-3">
                                                <label for="montoMulta" class="form-label">Monto de la Multa
                                                    ($):</label>
                                                <input type="number" id="montoMulta" class="form-control"
                                                    name="montoMulta" required>
                                            </div>

                                            <!-- Check Box -->

                                            <div class="mb-3 form-check form-check-inline">
                                                <input type="checkbox" id="multaActiva" class="form-check-input"
                                                    name="multaActiva">
                                                <label class="form-check-label" for="multaActiva">Multa Activa</label>
                                            </div>

                                            <div class="mb-3 form-check form-check-inline">
                                                <input type="checkbox" id="multaEnProgreso" class="form-check-input"
                                                    name="multaEnProgreso">
                                                <label class="form-check-label" for="multaEnProgreso">Multa en
                                                    Progreso</label>
                                            </div>

                                            <button type="button" class="btn btn-primary"
                                                onclick="calcularHorasServicioComunitario()">Calcular Horas de Servicio
                                                Comunitario</button>
                                            <button type="button" class="btn btn-secondary"
                                                onclick="limpiarDatos()">Limpiar Datos</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div id="multasActivas1" class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div id="infoMultaSeleccionada"
                                                class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Multas Activas
                                            </div>
                                            <div id="multasActivasInfo" class="h5 mb-0 font-weight-bold text-gray-800">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div id="multasActivas1" class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div id="infoMultaSeleccionada"
                                                class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Multas Activas
                                            </div>
                                            <div id="multasActivasInfo" class="h5 mb-0 font-weight-bold text-gray-800">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div id="multasEnProgreso2" class="card border-left-progress shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-progress text-uppercase mb-1">
                                                Multas en Progreso
                                            </div>
                                            <div id="multasEnProgresoInfo"
                                                class="h5 mb-0 font-weight-bold text-gray-800">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div id="multasEnProgreso3" class="card border-left-progress shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-progress text-uppercase mb-1">
                                                Multas en Progreso
                                            </div>
                                            <div id="multasEnProgresoInfo2"
                                                class="h5 mb-0 font-weight-bold text-gray-800">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">
                        <!-- Area Chart -->
                        <div class="col-7 mb-4">
                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Multas de tránsito a pagar</h6>
                                </div>
                                <div class="card-body">
                                    <p>Tipo de Multa: <b><span id="resultadoTipoMulta"></span></b> </p>
                                    <p>Monto de la Multa: <b><span id="resultadoMontoMulta"></span></b></p>
                                    <p>Horas de Servicio Comunitario: <b><span
                                                id="resultadoHorasServicioComunitario"></span></b></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-5 mb-4">
                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Certificado de Multa</h6>
                                </div>
                                <div class="card-body">
                                    <form id="multaForm">
                                        <div class="container mt-5">
                                            <form id="multaForm">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="horasComunitarias">
                                                    <label class="form-check-label" for="horasComunitarias">¿Ya ha finalizado sus horas comunitarias?</label>
                                                </div>
                                                <button type="button" class="btn btn-primary" onclick="generarCertificado()">Generar Certificado</button>
                                            </form>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>TUS MULTAS PR &copy;</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Seguro que quiere salir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión
                    actual.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-outline-success" href="login.php">Cerrar sesion</a>
                </div>
            </div>
        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script src="js/codigo.js"></script>
    <script src="js/formula_para_multas.js"></script>
    <script src="js/certificado.js"></script>

</body>

</html>