<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/footer.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="main.js"></script>
    <title>Sistema</title>
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }       
        .nave ul{
            list-style: none;
        }
        .menu > li{
            position: relative;            
        }
        .menu > li > a{
            display: block;
            padding: 15px 10px;
            color:#333333;
            font-family: 'Vesper Libre', serif !important;
            font-size: 18px !important;
            text-decoration: none;
        }
        .menu li a:hover {
            color: #CE7D35;
            transition: all .3s;
        }

        /*submenus*/
        .sub-menu {
            position: absolute;
            background-color:transparent;
            font-family: 'Vesper Libre', serif !important;
            font-size: 18px !important;
            color: black !important;
            padding-top: 30px;
            visibility:hidden;
            opacity: 0;
            transition: opacity 1.5s;
            right: -30px;          
        }
        .sub-menu li a:hover{
            background-color:lightgreen;
        }
        .sub-menu li a{
            display: block;
            color: #fff;
        }
        .menu li:hover .sub-menu {
            visibility: visible;
            opacity: 1;
        }
    </style>
    <title>Sistema</title>
</head>
<body>
    <header>
        <div class="logos">
            <div id="pedi"><img src="imagenes/logopediahome.png" alt="" width="100px" height="50px"></div>
            <div class="logos1">
                <a href="https://api.whatsapp.com/send?phone=5492613043898" target="_blanck"><div><img src="imagenes/logowhat.png" alt="" width="30px" height="30px"></div>
                    </a>            
                 <a href="https://www.instagram.com/pedia_home/" target="_blanck"><div><img src="imagenes/logoinsta.png" alt="" width="30px" height="30px"></div></a>
                <a href="https://www.facebook.com/Pedia-Home-109620748155930" target="_blanck"><div><img src="imagenes/logoface.png" alt="" width="30px" height="30px"></div>
                    </a>        
                <a href="linkedin.com/in/pedia-home-mendoza" target="_blanck"><div><img src="imagenes/logolinke.png" alt="" width="30px" height="30px"></div></a>
                    
            </div>
            <div class="buscar">
                <div class="lupa">
                    <img src="imagenes/lupa.png" alt="" width="30px" height="30px" >
                    <input type="text" class="buscar_texto" placeholder="Escribe lo que buscas">  
                </div>
            </div>
        </div>      
    </header>
    <nav class="nave">
        <ul class="menu">
            <li><a href="index.html">Inicio</a></li>
            <li><a href="#">Nosotros</a>
                <ul class="sub-menu">
                    <li><a href="quienesSomos.html">Quienes Somos</a></li>
                    <li><a href="organigrama.html">Organigrama</a></li>
                    <li><a href="institución.html">La Institución</a></li>
                </ul>
            </li>
            <li><a href="equipo.html">Nuestro equipo</a></li>
            <li><a href="sistema.html">Sistema</a></li>
            <li><a href="https://api.whatsapp.com/send?phone=5492613043898">Turno</a></li>
            
        </ul>
    </nav>
    <aside>
        <div class="paginaPrincip"><img src="imagenes/poratadasiste.png" alt="" width="120%"></div>
    </aside>
    <section class="ftco-section contact-section ftco-degree-bg">
        <div class="container">
          <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">


              <h2 class="h4">Inicio al sistema</h2>
  			  		<?php	if(isset($_GET["error"])) {
  				echo "<p class='error'>" . $_GET["error"] . "</p>";
  			}
  ?>


            </div>
            <div class="w-100"></div>
            <div class="col-md-3">
            <form action="https://system.neumohome.com/doc/login.php" method="post"  name="apass1">
  				<input type="text" class="form-control" name="usuario" placeholder="Usuario" required>
  				<input type="hidden"  name="sitio" value="nhmedica.com">
  				<input type="password" class="form-control" name="Password1" placeholder="Password" required>


            </div>
            <div class="col-md-3">
  			  			<button type="submit" name="enviar" class="btn btn-default">Portal profesional</button>
  			  		</form>

            </div>
            <div class="col-md-3">
  		<form action="https://system.neumohome.com/pacientes/login.php" method="post"  name="apass2">
  				<input type="text" class="form-control" name="usuario2" placeholder="DNI" required>
  				<input type="hidden"  name="sitio" value="nhmedica.com">
  				<input type="password" class="form-control" name="password2" placeholder="Password" required>
  			</div>
            <div class="col-md-3">
  				<button type="submit" name="enviar2" class="btn btn-default">Portal paciente</button>
  		</form></div>
          </div>
          <div class="row">
          </div>
        </div>
      </section>
    </section>
    <section class="mapa" style="padding-bottom:2rem;">
        <iframe class="mapa-m"  src= "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3350.128694469739!2d-68.846585!3d-32.8947655!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x967e090fc3b03a2f%3A0x46060152c3008698!2sCj%C3%B3n.%20Lemos%20598%2C%20M5500HFA%20Mendoza!5e0!3m2!1ses-419!2sar!4v1653008892308!5m2!1ses-419!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <footer>
        <footer>
            <div class="container-footer">
                <div class="princip">
                    <img src="imagenes/logopediahome.png" alt="#">
                </div>
                <div class="verticalLine"></div> 
                <div class="logosfoot" id="logosfoot" style="display: flex;">            
                    <a href="https://api.whatsapp.com/send?phone=5492613043898" target="_blanck"><div><img src="imagenes/logowhat.png" alt="#"width="40px" height="50px"></div></a>
                    <a href="https://www.instagram.com/pedia_home/" target="_blanck"><div><img src="imagenes/logoinsta.png" alt="#"width="40px" height="50px"></div></a>
                    <a href="https://www.facebook.com/Pedia-Home-109620748155930" target="_blanck"><div><img src="imagenes/logoface.png" alt="#"width="40px" height="50px"></div></a>
                    <a href="linkedin.com/in/pedia-home-mendoza" target="_blanck"><div><img src="imagenes/logolinke.png" alt="#"width="40px" height="50px"></div></a>
                </div>
            </div>
            <div>
                <nav class="pestafoot">
                    <ol id="pestanas">
                        <label class="abajo"><a class="masbajo" href="index.html">Inicio</a></label>
                        <label class="abajo"><a class="masbajo" href="quienesSomos.html">Nosotros</a></label>
                        <label class="abajo"><a class="masbajo" href="equipo.html">Nuestro Equipo</a></label>
                        <label class="abajo"><a class="masbajo" href="#">Noticias</a></label>
                        <label class="abajo"><a class="masbajo" href="sistema.html">Sistema</a></label>
                        <label class="abajo"><a class="masbajo" href="https://api.whatsapp.com/send?phone=5492613043898">Turno</a></label>
                    </ol>
                </nav>
            </div>
            <div class="barra-horiz">
            _______________________________________________________________________________________
            </div>
            <div class="subtitulo" style="padding-top:20px ;margin-left:-40px;">
                <h4>Servicios</h4>
    
            </div>
            <div>
                <nav class="pestaServ" style="padding-bottom:30px ;margin-left:30px;margin-bottom:-20px;">
                    <ol id="listaServ">
                        <label class="tipos"><a href="serviciosdomiciliarios.html">Servicios domiciliarios</a></label>
                        <label class="tipos"><a href="pediatria.html">Pediatría integral</a></label>
                        <label class="tipos"><a href="atentemprana.html">Intervención temprana y rehabilitación</a></label>
                        <label class="tipos"><a href="telemedicina.html">Telemedicina</a></label>
                        <label class="tipos"><a href="https://neumohome.com/index.html">Neumohome</a></label>
                        
                    </ol>
                </nav>
            </div>
            <div class="barra-horiz">
                ________________________________________________________________________________________
            </div>
            <div class="formulario">
                <div class="formu" style="padding-top:20px;margin-right:-200px ;">
                    <form action="">
                        <div class="mb-3" style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;font-size: 18px;text-decoration-line:underline;color:black;margin-top: -20px;margin-bottom: -15px;"><h4>ESCRIBENOS</h4></div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"></label>
                            <input type="nombre" class="form-control" id="exampleFormControlInput1" placeholder="Nombre y Apellido">
                            <label for="exampleFormControlInput2" class="form-label"></label>
                            <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com">
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label"></label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="9" style="width: 430px;"></textarea>
                          </div>
                          <div class="mb-3">
                            <button type="submit" class="btn btn-danger">Enviar</button> 
                                            <button type="reset" class="btn btn-light" value="Reset">Cancelar</button>
                          </div>
                    </form>
                </div>
                <div class="parrafo" style="padding-top: 60px;font-size: 14px;">
                    <p>Somos un grupo de profesionales de la salud que consideran
                    que el trabajo en equipo, el abordaje integral y
                    los aportes de cada disciplina posibilitan un
                    acompañamiento enriquecedor y efectivo centrado
                    en la persona. A través de cada especialidad ofrecemos
                    soluciones a cada niño, niña o adolescente que le permiten
                    tener una mejor calidad de vida individual e interpersonal.
                    Ofrecemos atención, asesoramiento especializado
                    y soporte a pacientes, familias, otros médicos o instituciones.
                    Tenemos una nueva mirada integral y compleja. </p>
    
                </div>
            </div>
    
        </footer>
    </footer>
    <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/main.js"></script>

<script src="js/core.min.js"></script>
<script src="js/md5.js"></script>
    
</body>
</html>