<?php
session_start();
if (!isset($_SESSION['director'])){
    echo '<script style="color: red"> alert("Iniciar sesión para acceder a esta  página")</script>';
    header('Location: ../../index.html');
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Performance Evaluations - Inicio</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="application-name" content="Performance Evaluations" lang="es">
    <meta name="description" content="Aplicacion Web para Medir el Desempeño y Clima Organizacional del Programa de Ingenieria de Sistemas de la Universidad Francisco de Paula Santander - Cúcuta, Norte de Santander"/>
    <meta name="Author" content="GIDIS"  lang="es">
    <meta name="Contributors" content="Lizeth Rios Epalza - Eismar Johann Paredes Peña" lang="es">
    <meta name="Aditional-Contributors" content="Derly Zuley Angel Medina - José David Castro García" lang="es">
    <meta name="keywords" content="evaluacion, director, pares, docente, ingenieria, de sistemas, ufps, universidad, francisco, de paula, santander, cucuta, norte de santander, colombia"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- Favicon -->
    <link rel='Shortcut icon' type="image/x-icon" href="../../assets/icons/favicon.ico">
    <!-- Web Fonts css-->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- Font Awesome v5.0.13 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
          crossorigin="anonymous">
    <!-- Jquery mCustomScrollbar v3.1.1 -->
    <link rel="stylesheet" href="../../assets/css/jquery.mCustomScrollbar.css">
    <!-- Bootstrap css v3.3.2 -->
    <link rel="stylesheet" href="../../assets/css/Bootstrap3/bootstrap.min.css">
    <!-- Material Design Icons v2.2.0 -->
    <link rel="stylesheet" href="../../assets/css/material-design-iconic-font.min.css">
    <!-- Sweet Alert v0.5.0 -->
    <link rel="stylesheet" href="../../assets/css/sweet-alert.css">
    <!-- Normalize v3.0.2-->
    <link rel="stylesheet" href="../../assets/css/normalize.css">
</head>
<body>
    <div class="navbar-lateral full-reset">
        <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile custom-scroll-containers">
            <div class="logo full-reset all-tittles">
                <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i>
                Performance Evaluations &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
            <div class="full-reset nav-espacio">
                <figure>
                    <img src="../../assets/icons/favicon.png" alt="Work Meter" class="img-responsive center-box" style="width:55%;">
                </figure>
            </div>
            <div class="full-reset nav-lateral-list-menu" style="padding-right: 15px">
                <ul class="list-unstyled">
                    <li><a href="home.php" style="color: black"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp;Inicio </a></li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-account zmdi-hc-fw"></i>&nbsp;&nbsp;Información del Director<i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="viewProfile.php" style="color: black"><i class="zmdi zmdi-face zmdi-hc-fw"></i>&nbsp;&nbsp;Ver Perfil</a></li>
                            <li><a href="editProfile.php" style="color: black"><i class="zmdi zmdi-assignment-account zmdi-hc-fw"></i>&nbsp;&nbsp;Editar Perfil</a>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-accounts-alt zmdi-hc-fw"></i>&nbsp;&nbsp;Docentes<i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="teacherRegistry.php" style="color: black"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp;Registrar docente</a></li>
                            <li><a href="teachersList.php" style="color: black"><i class="zmdi zmdi-accounts-list zmdi-hc-fw"></i>&nbsp;&nbsp;Ver Listado de Docentes</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp;Asignaturas<i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="addSubject.php" style="color: black"><i class="zmdi zmdi-bookmark zmdi-hc-fw"></i>&nbsp;&nbsp;Agregar Asignatura</a></li>
                            <li><a href="subjectsList.php" style="color: black"><i class="zmdi zmdi-collection-bookmark zmdi-hc-fw"></i>&nbsp;&nbsp;Mostrar Asignaturas</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-calendar-alt zmdi-hc-fw"></i>&nbsp;&nbsp;Periodo<i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="addPeriod.php" style="color: black"><i class="zmdi zmdi-calendar-check zmdi-hc-fw"></i>&nbsp;&nbsp;Agregar Periodo</a></li>
                            <li><a href="periodsList.php" style="color: black"><i class="zmdi zmdi-calendar-note zmdi-hc-fw"></i>&nbsp;&nbsp;Ver Periodos</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>&nbsp;&nbsp;Evaluaciones<i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="../general/mantenimiento.html" style="color: black"><i class="zmdi zmdi-assignment-alert zmdi-hc-fw"></i>&nbsp;&nbsp;Editar Evaluacion</a></li>
                            <li><a href="listTeacherEvaluation.php" style="color: black"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i>&nbsp;&nbsp;Realizar Evaluación a Docentes</a></li>
                            <li><a href="listPairEvaluation.php" style="color: black"><i class="zmdi zmdi-accounts-alt zmdi-hc-fw"></i>&nbsp;&nbsp;Realizar Evaluación a Pares</a></li>
                            <li><a href="selfEvaluation.php" style="color: black"><i class="zmdi zmdi-account zmdi-hc-fw"></i>&nbsp;&nbsp;Realizar Auto-evaluación</a></li>
                            <li><a href="evaluationProgress.php" style="color: black"><i class="zmdi zmdi-assignment zmdi-hc-fw"></i>&nbsp;&nbsp;Ver Progreso de Evaluaciónes</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="content-page-container full-reset custom-scroll-containers">
        <!--Formulario de close-->
        <form id="close_sesion" method="post">
            <nav class="navbar-user-top full-reset">
                <ul class="list-unstyled full-reset">
                    <input type="hidden" name="solicitud" value="close">
                    <li  class="tooltips-general exit-system-button" data-href="../../index.html" data-placement="bottom" title="Cerrar sesión">
                        <i class="zmdi zmdi-power"></i>
                    </li>
                    <li style="color:#fff; cursor:default;">
                        <span id="name">director_name</span>
                    </li>
                    <li class="mobile-menu-button visible-xs" style="float: left !important;">
                        <i class="zmdi zmdi-menu"></i>
                    </li>
                </ul>
            </nav>
        </form>
        <div class="container nav-espacio">
            <h1 class="all-tittles">Bienvenido, Director&nbsp;<small>&nbsp;Inicio</small></h1>
        </div>
        <section class="full-reset text-center" style="padding: 40px 0;">
            <div class="container-fluid container-espacio">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <img src="../../assets/imgs/user2.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8 text-left lead">
                        Bienvenido a la sección de director del departamento, acá podrá realizar sus respectivas evaluaciones y modificaciones de datos.
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer full-reset">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-3">
                        <figure>
                            <img src="../../assets/imgs/logo_ingsistemas_vertical.png" alt="IS - UFPS" class="img-responsive center-box" style="width:70%; padding-bottom: 10px">
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <h3 class="all-tittles">Acerca de</h3>
                        <p>Programa de Ingeniería de Sistemas de la Universidad Francisco de Paula Santander<br>
                            Acreditación de alta calidad según resolución No. 15757 del Ministerio de Educación Nacional<br>
                            Avenida Gran Colombia No. 12E-96 Barrio Colsag, Cúcuta, Colombia<br>
                            Teléfono (57) 7 5776655 Extensiones 201 y 203<br>
                            Correo electrónico: ingsistemas@ufps.edu.co<br>
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <h3 class="all-tittles">Desarrollado por: </h3>
                        <ul class="list-unstyled">
                            <li><i class="zmdi zmdi-code zmdi-hc-fw"></i>&nbsp;&nbsp;Lizeth Rios Epalza </li>
                            <li><i class="zmdi zmdi-edit zmdi-hc-fw"></i>&nbsp;&nbsp;Jose David Castro Garcia</li>
                            <li><i class="zmdi zmdi-edit zmdi-hc-fw"></i>&nbsp;&nbsp;Derly Zuley Angel Medina</li>
                            <li><i class="zmdi zmdi-code zmdi-hc-fw"></i>&nbsp;&nbsp;Eismar Johann Paredes Peña</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright full-reset">Gidis © Todos los derechos reservados</div>
        </footer>
    </div>
    <!-- Jquery v1.11.2 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/jquery-1.11.2.min.js"><\/script>')</script>
    <!-- Jquery mCustomScrollbar v3.1.13 -->
    <script src="../../assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Bootstrap js v3.3.2 -->
    <script src="../../assets/js/Bootstrap3/bootstrap.min.js"></script>
    <!-- Sweet Alert v0.5.0-->
    <script src="../../assets/js/sweet-alert.min.js"></script>
    <!-- Modernizr v2.8.3 -->
    <script src="../../assets/js/modernizr.js"></script>
    <!-- Main -->
    <script src="../../assets/js/main.js"></script>
    <!-- Fonts js -->
    <script src="../../assets/js/director.js"></script>
</body>
</html>