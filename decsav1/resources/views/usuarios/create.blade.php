
 <!-- include("funciones/session.php");-->
 <!-- include("funciones/conexion.php");-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
       
 <!-- include("componentes/Sidebar.php")-->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
             <!-- include("componentes/Navbar.php")-->
             <!--  Navbar End -->


            <!-- Blank Start -->

            
            <div class="container-fluid pt-4 px-4">
               

            <div class="table-responsive">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Completar con sus datos</h6>
                            <form action=" {{ url('usuarios') }}" method="post" autocomplete="off">
                                <div class="row mb-3">
                                    <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="apellido" name="apellido" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="estado" class="col-sm-2 col-form-label">Tipo Usuario</label>
                                    <div class="col-sm-10">
                                    <select class="form-select mb-3" aria-label="Default select example" name="tipo_usuario" id="tipo_usuario">
                                <option selected>Seleccionar tipo de usuario</option>
                                <option value="1">Administrador</option>
                                <option value="2">Operador</option>
                            </select>
                                    </div>
                                    </div>

                                <div class="row mb-3">
                                    <label for="mail" class="col-sm-2 col-form-label">Correo Electronico</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="mail" name="mail" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="usuario" class="col-sm-2 col-form-label">Usuario</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="usuario" name="usuario" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="usuario" class="col-sm-2 col-form-label">Clave</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="clave" name="clave" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="telefono" class="col-sm-2 col-form-label">Telefono</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="telefono" name="telefono" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="estado" class="col-sm-2 col-form-label">Estado</label>
                                    <div class="col-sm-10">
                                    <select class="form-select mb-3" aria-label="Default select example" name="estado" id="estado">
                                <option selected>Seleccionar estado</option>
                                <option value="1">Activo</option>
                                <option value="0">No activo</option>
                            </select>
                                    </div>
                                </div>
                               
                                <div class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Areas</legend>
                                    <div class="col-sm-10">
                                   <!-- foreach ($mysqli->query('SELECT * from tbl_areas') as $row)-->
                                        <div class="form-check">
                                          <!--va el id en id y value-->
                                            <input class="form-check-input" type="checkbox" id=" " name="area" value=" ?>">
                                            <label class="form-check-label" for="gridCheck1">
                                           
                                            </label>
                                         </div>
                                  
                                    <br>
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </form>
                        </div>
                    </div>
            </div>
            <!-- Blank End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>