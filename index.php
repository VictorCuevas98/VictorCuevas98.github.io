<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $_SESSION["token"] = md5(uniqid(mt_rand(), true));
    ?>
    <meta charset="UTF-8">
    <meta name="csrf-token" content=".<?=$_SESSION['token']?>.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Iconos -->

    <link rel="shortcut icon" href="assets/img/favicon.png" sizes="32x32" type="image/png">
    <link rel="apple-touch-icon-precomposed" href="assets/img/favicon-120.png" sizes="120x120" type="image/png">
    <link rel="apple-touch-icon-precomposed" href="assets/img/favicon-152.png" sizes="152x152" type="image/png">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/TextPlugin.min.js"></script>
    <!--<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/DrawSVGPlugin3.min.js"></script>-->
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <title>Victor's time</title>

    <!-- Metadatos importantes -->
    <meta name="author" content="Victor Manuel Cuevas Gonzalez">
    <meta name="description" content="Portfolio of Victor Manuel Cuevas Gonzalez">

    <meta property="og:image" content="https://victorcuevas98.github.io/./assets/img/profile.jpg">
    <meta property="og:description" content="Portfolio of Victor Manuel Cuevas Gonzalez.">
    <meta property="og:title" content="Loading ...">
</head>
<body id="app">
    <!-- Header -->
    <header id="header" class="container-lg">
        <video src="assets/video/videobackground.mp4" autoplay loop id="bg-video" muted>
            Tu navegador no admite el elemento <code>video</code>
        </video>
        <span class="terminal"></span>
        <!--Main Animation-->
        <div class="row h-100 pluma justify-content-center text-center align-items-center">
            <h2 id="text1">https://VICTORCUEVAS98.github.io/</h2>
            <h2 id="text2"></h2>
            <div class="column col-sm-6 col-xl-6 pluma1"><p class="t2">texto</p>
                <svg id="svg1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 106.69 20"><title>pluma punta</title>
                    <path class="cls-1" d="M114,31.51l-37.25.63C58.5,32.76,44,33.51,44,33.51v15C56.79,49.17,76,50,93.21,50.26l20.75.25" transform="translate(-7.35 -31.01)"/>
                    <path class="cls-1" d="M113.93,37.51h-66v-2l66.1-.73" transform="translate(-7.35 -31.01)"/>
                    <path class="cls-1" d="M42,33.51v15s-26-2-29-6v-3S18,35.51,42,33.51Z" transform="translate(-7.35 -31.01)"/>
                    <path class="cls-1" d="M16,41.51H40v5s-16,0-24-4Z" transform="translate(-7.35 -31.01)"/>
                    <path class="cls-1" d="M11,39.51V42S4,41.18,11,39.51Z" transform="translate(-7.35 -31.01)"/></svg>
            </div>
            <div class="column col-ms-6 col-xl-6 pluma2">
                <svg id="svg2" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 106.5 32.02"><title>Pluma 2</title>
                    <path class="cls-2" d="M1,31.51H19v19H0" transform="translate(0.04 -18.98)"/>
                    <path class="cls-2" d="M21,31.51v19H91a2.94,2.94,0,0,0,3-2.88V34.51s0-3-4-3Z" transform="translate(0.04 -18.98)"/>
                    <path class="cls-2" d="M23,34.51v3H90s1-3-2-3Z" transform="translate(0.04 -18.98)"/>
                    <path class="cls-2" d="M.5,34.72,17,34.51v3H.23" transform="translate(0.04 -18.98)"/>
                    <path class="cls-2" d="M96,35.51v12h8s2,0,2-3v-7a2,2,0,0,0-2-2Z" transform="translate(0.04 -18.98)"/>
                    <path class="cls-2" d="M78,29.51s4-5-1-5-39,1-39,1-2,0-1,4c0,0-6,0-6-3,0,0-1-2,5-3s42-4,42-4,9-1,12,10Z" transform="translate(0.04 -18.98)"/></svg>
            </div>
        </div>
    </header>

    <!-- Navbar -->
    <div id="navbar-parent" class="container-lg" style="padding-left: 0; padding-right: 0;">
        <nav id="navbar" class="navegador navbar navbar-expand-lg navbar-dark shadow-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="">
                    <img src="assets/img/favicon-152-white.png" alt="" width="50" height="auto" class="mx-3"><span class="text-white">Ing. </span><span style="color: #F27141">Cuevas</span>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#subnav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="subnav" aria-expanded="false">
                  <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <a href="#portafolio">
                            <li class="nav-item m-2 method-hover">
                                Portafolio
                            </li>
                        </a>

                        <a href="#skillset">
                            <li class="nav-item m-2 method-hover">
                                Tecnologias
                            </li>
                        </a>

                        <a href="#experience">
                            <li class="nav-item m-2 method-hover">
                                Experiencia
                            </li>
                        </a>

                        <a href="#contact">
                            <li class="nav-item m-2 method-hover">
                                Contacto
                            </li>
                        </a>
                        <a href="">
                            <li class="nav-item m-2 method-hover">
                                Desarrollo Web
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div id="portafolio" class="py-5 px-5 container-lg">
        <div class="container">
            <div class="text-center text-white"><h2>PORTAFOLIO</h2></div>
            <hr class="section-hr">
            <div class="row justify-content-center my-5">
                <div class="col-sm-12 col-md-4 col-xs-12 image-container">
                    <a class="btn-portafolio">
                        <img class="img-fluid" src="assets/img/portafolio/monitorecontrol.jpg" alt="">
                        <h4>Control de Merma</h4>
                    </a>
                </div>

                <div class="col-sm-12 col-md-4 col-xs-12 image-container">
                    <a class="btn-portafolio">
                        <img class="img-fluid" src="assets/img/portafolio/xynergia.jpg" alt="">
                        <h4>Xynergia | Pagina de Contacto</h4>
                    </a>
                </div>

                <div class="col-sm-12 col-md-4 col-xs-12 image-container">
                    <a class="btn-portafolio">
                        <img class="img-fluid" src="assets/img/portafolio/saica.jpg" alt="">
                        <h4>Secretaría de Salud | SAICA</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--Portafolio Modal-->
    <div id="portafolio-modal" class="modal fade" tabindex="-1" aria-labelledby="Portfolio Projects" role="dialog" style="display: none;">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="position-relative m-2">
                    <button type="button" class="position-absolute btn-close top-0 end-0" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h4 class="text-center mt-5" id="portfolio-project-title"></h4>
                    <p class="text-muted text-center" id="portfolio-project-subtitle"></p>
                </div>
                <div class="my-3 mx-4"><hr class="section-hr"></div>
                <div class="mx-4">
                    <div class="mx-5" id="porfolio-image-wrapper">
                        <img id="img-modal" class="img-fluid" src="" alt="">
                    </div>
                    <div class="mt-4 mx-4"><hr class="section-hr"></div>
                    <div class="mx-5 text-center mt-2">
                        <a href="assets/video/videocontrol.mp4" id="btn-video" class="visually-hidden btn btn-outline-dark my-2 btn-device mr-2">Video</a>
                        <a href="" id="btn-link" class="visually-hidden btn btn-outline-dark my-2 btn-device">Link</a>
                        <p id="portfolio-project-description"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="skillset" class="py-5 px-5 container-lg" data-overlay="7">
        <div class="container-fluid">
            <div class="text-center text-white"><h2>TECNOLOGIAS</h2></div>
            <hr class="section-hr">
            <div class="row justify-content-center g-2">
                <div class="col-sm-3 col-xs-4 image-container skill text-center">
                    <h4>HTML5</h4>
                    <img class="svg-skill" src="assets/img/skillset/html.svg">
                </div>
                <div class="col-sm-3 col-xs-4 image-container skill text-center">
                    <h4>CSS3</h4>
                    <img class="svg-skill" src="assets/img/skillset/css.svg">
                </div>
                <div class="col-sm-3 col-xs-4 image-container skill text-center">
                    <h4>JavaScript</h4>
                    <img class="svg-skill" src="assets/img/skillset/js.svg">
                </div>
                <div class="col-sm-3 col-xs-4 image-container skill text-center">
                    <h4>Jquery</h4>
                    <img class="svg-skill" src="assets/img/skillset/jquery.svg">
                </div>
                <div class="col-sm-3 col-xs-4 image-container skill text-center">
                    <h4>Bootstrap</h4>
                    <img class="svg-skill" src="assets/img/skillset/bootrstrap.svg">
                </div>
                <div class="col-sm-3 col-xs-4 image-container skill text-center">
                    <h4>GSAP</h4>
                    <img class="svg-skill" src="assets/img/skillset/gsap.svg">
                </div>
                <div class="col-sm-3 col-xs-4 image-container skill text-center">
                    <h4>Git|GitHub</h4>
                    <img class="svg-skill" src="assets/img/skillset/git.svg">
                </div>
                <div class="col-sm-3 col-xs-4 image-container skill text-center">
                    <h4>SVG Graphics</h4>
                    <img class="svg-skill" src="assets/img/skillset/svg.svg">
                </div>
                <div class="col-sm-3 col-xs-4 image-container skill text-center">
                    <h4>Laravel</h4>
                    <img class="svg-skill" src="assets/img/skillset/laravel.svg">
                </div>
                <div class="col-sm-3 col-xs-4 image-container skill text-center">
                    <h4>PHP</h4>
                    <img class="svg-skill" src="assets/img/skillset/php.svg">
                </div>
            </div>
        </div>
    </div>

    <div id="experience" class="py-5 px-5 container-lg">
        <div class="container-fluid">
            <div class="text-center text-white"><h2>EXPERIENCIA</h2></div>
            <hr class="section-hr">
            <div class="row justify-content-center my-5">
                <div class="col-md-4 col-xs-12 image-container">
                    <a class="btn-experience" style="border-radius: 40px;">
                        <img class="img-fluid" src="assets/img/xyn.jpg" alt="">
                        <h4 class="text-dark text-center">Xynergia Servicios Avanzados S.A de C.V</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--modal-resumen-->
    <div class="modal fade" id="experiencia-modal" tabindex="-1" aria-labelledby="ModalLabel" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content">
            <div class="position-relative m-2">
              <button type="button" class="position-absolute btn-close top-0 end-0" data-bs-dismiss="modal" aria-label="Close"></button>
                <h1 class="text-center mt-5 mb-0">Victor Manuel Cuevas González</h1>
                <p style="font-size: 15px;" class="text-center text-muted">Estado de México | axte_vic@hotmail.com</p>
                <p style="font-size: 20px;" class="text-center">Front-End Web Developer apasionado por las tecnologias, automaticacion y programacion. Esto más que una profesion es mi distracción. <img width="15" height="auto" src="assets/img/heart-solid.svg" alt=""> </p>
            </div>
            <ul class="list-unstyled">
                <strong class="text-center" id="puesto_experiencia"></strong>
                <li>
                    <div style="height: 28px; width: 100%; background-color: #5A636B;" class="my-3 text-white">
                        <h5>&nbsp;&nbsp;&nbsp;&nbsp;Actividades</h5>
                    </div>
                </li>
                <ul class="ml-5" id="actividades_experiencia">
                    <!--
                    <li>Conocimiento solido de HTML, CSS y JavaScript standares y compatibilidad con navegadores.</li>
                    <li>Experiencia Front-end con diseño responsivo, CSS3, Jquery, GSAP y Bootstrap.</li>
                    <li>Experiencia en Back-end con Php, Laravel, Authorization/Authentication, Passport, creacion y consumo de RESTful APIs.</li>
                    <li>Habilidades creativas de diseño gráfico y de interfaz de usuario con Illustrator y código SVG.</li>
                    <li>Gestion eficiente del flujo de trabajo con Bash, Git, Ubuntu 16.04, Apache.</li>
                    <li>Conocimientos Basicos de adminitracion de base de datos relacionales con Mysql y normalización. </li>
                    <li>Inglés Intermedio Avanzado</li>
                    -->
                </ul>
                <li>
                    <div style="height: 28px; width: 100%; background-color: #5A636B;" class="my-3 text-white">
                        <h5>&nbsp;&nbsp;&nbsp;&nbsp;Herramientas</h5>
                    </div>
                </li>
                <ul class="ml-5" id="herramientas_experiencia">
                    <!--
                    <li>Desarrollo de nuevos modulos interactivos con JavaScript, Jquery en Landig Page.</li>
                    <li>Implementacion, actualización de estilos para el sitio oficial Xynergia.</li>
                    <li>Asistencia para el diseño de propuestas usando Adobe XD, Sketch y puesta en marcha con CSS3, Bootrsap, Jquery.</li>
                    <li>Seguimiendo a posibles modificaciones, errores, o nuevos requerimientos lanzados por el cliente o empresa.</li>
                    -->
                </ul>
            </ul>
            <br>
          </div>
        </div>
    </div>

    <div id="contact" class="py-5 px-5 container-lg" data-overlay="7">
        <div class="container-fluid">
            <div class="text-center text-white"><h2>CONTACT</h2></div>
            <hr class="section-hr">
            <div class="row justify-content-center my-5">
                <div class="col-sm-8">
                    <form method="post" action="form.html" id="form-contact" onsubmit="return validate()">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Arthur" autocomplete="off" required>
                            <label for="floatingInput">Tu Nombre</label>
                          </div>
                          <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="example@email.com" autocomplete="off" required>
                            <label for="floatingPassword">Tu Email</label>
                          </div>
                          <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Breve descripción del mensaje" autocomplete="off" required>
                            <label for="floatingInput">Asunto</label>
                          </div>
                          <div class="form-floating mb-3">
                              <textarea class="form-control h-75" id="message" name="message" autocomplete="off" required></textarea>
                            <label for="floatingPassword">Mensaje</label><span class="caracteres">500</span>
                          </div>
                          <div class="form-floating mb-3">
                            <input maxlength="2" type="text" class="form-control" id="operation" name="operation" placeholder="name@example.com" autocomplete="off" required>
                            <label for="floatingInput">
                                <input type="text" id="n1" name="n1" readonly> + <input type="text" id="n2" name="n2" readonly>
                            </label>

                          </div>
                          <button type="submit" id="boton-enviar" class="btn btn-dark">Enviar</button>
                        <div id="respuesta"></div>
                          <!--<div id="load" class="spinner-border text-light hide" role="status">
                            <span class="visually-hidden">Loading...</span>
                          </div>-->
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer id="footer" class="bg-dark text-center py-5 h-auto container-lg" >
        <div class="container">
            <div class="row g-2">
                <div class="col-sm-4 col-xs-4">
                    <a class="social mx-auto" href="https://www.facebook.com/victor.cuevas.3572/" target="_blank">
                        <div class="front">
                        <i class="fa fa-facebook"></i>
                        </div>
                        <div class="back">
                        <i class="fa fa-facebook"></i>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 col-xs-4 text-center">
                    <a class="social social-github mx-auto " href="https://github.com/VictorCuevas98" target="_blank">
                        <div class="front">
                            <i class="fa fa-github"></i>
                        </div>
                        <div class="back">
                            <i class="fa fa-github"></i>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 col-xs-4 text-center">
                    <a class="social social-linkedin mx-auto" href="https://www.linkedin.com/in/victor-manuel-cuevas-gonzalez-00a05818a/" target="_blank">
                        <div class="front">
                            <i class="fa fa-linkedin"></i>
                        </div>
                        <div class="back">
                            <i class="fa fa-linkedin"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <hr class="section-hr">
        <div class="col aligin-self-center pb-4 pt-2">
            <span class="text-info">
                Everyone thinks of changing the world, but no one thinks of changing himself. <br>
                -Leo Tolstoy
            </span>
            <span style="color: #85929E">Developed and designed by <a href="https://victorcuevas98.github.io/">Victor Cuevas</a>. ©
                <script type="text/javascript">

                    $(document).ready(function() {
                        $("#n1").val(Math.floor(Math.random()*10+1));
                        $('#n2').val(Math.floor(Math.random()*10+1));
                        $('#form-contact').submit(function(event) {
                            $('#respuesta').fadeOut(250);
                            $.ajaxSetup({
                                headers: {
                                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                                }
                            });
                            $.ajax({
                                url: 'fichero.php',
                                type: 'POST',
                                data: $(this).serialize(),
                                success: function(resp) {
                                    $.each($('#respuesta'), function(event) {
                                        $(this).fadeIn(250);
                                        $(this).html(resp);
                                        if ($(this).html() == $('#name').val()+', ha enviado el correo de forma exitosa.') {
                                            $.each($('#boton-enviar'), function(event) {
                                                $(this).attr({
                                                    disabled : true,
                                                    value : 'Enviado'
                                                });
                                                $(this).click(function() {
                                                    return false;
                                                });
                                            });
                                        }
                                    });
                                },
                                error: function(jqXHR, textStatus, errorThrown) {
                                    $.each($('#respuesta'), function(event) {
                                        $(this).fadeIn(250);
                                        $(this).html('Error, no se ha podido enviar el correo, inténtelo más tarde');
                                    });
                                }
                            });
                            return false;
                        });
                        $('#message').keyup(function(event) {
                            $('.caracteres').text(500 - $(this).val().length);
                            if ($(this).val().length > 500) {
                                $('.caracteres').css('color','red');
                                $('#boton-enviar').attr('disabled',true);
                            } else {
                                $('.caracteres').css('color','green');
                                $('#boton-enviar').attr('disabled',false);
                            }
                        });
                        $('#n1, #n2').keydown(function() {
                            return false;
                        });
                        $('#respuesta').click(function(event) {
                            $(this).fadeOut(250);
                        });
                    });


                    var validate = function () {
                        var form = document.getElementById("form-contact");
                        if (!form.name.value || !isNaN(parseInt(form.name.value))){
                            return false;
                        }
                        var emailRegex = /^\w+@\w+\.\w+$/;
                        if (!form.email.value.match(emailRegex)){
                            return false;
                        }
                        if (form.phone.value.length < 10){
                            return false;
                        }

                        return true;

                    }

                    var d = new Date();
                    document.write(d.getFullYear());
                </script>
                All rights reserved.</span>
        </div>
    </footer>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/portafolio.js"></script>
    <script src="assets/js/experiencia.js"></script>
</body>
</html>