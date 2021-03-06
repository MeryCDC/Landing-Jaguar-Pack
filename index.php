<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jaguarpack - Compras express</title>
    <meta charset="UTF-8">
    <meta name="description" content="Jaguarpack Compras express">
    <meta name="keywords" content="Compras express, entregas, rapido">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/style.css" />


    <!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
    <!-- Header section -->
    <header class="header-section clearfix" id="menu">
        <div class="container-fluid">
            <a href="/" class="logo" id="logo">
                <img src="img/logo2.png" alt="" id="logotipo">
            </a>
            <div class="responsive-bar"><i class="fa fa-bars"></i></div>
            <a href="app/login.php" class="user"><i class="fa fa-user"></i></a>
            <a href="app/login.php" class="site-btn">Iniciar Sesión</a>
            <nav class="main-menu">
                <ul class="menu-list">
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#cotiza">Cotiza</a></li>
                    <li><a href="#funcionamiento">¿Como funciona?</a></li>
                    <li><a href="#acerca">Acerca de</a></li>
                    <li><a href="/app/registro.php">Registro</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Header section end -->


    <!-- Inicio section -->
    <section class="hero-section" id="inicio">
        <div class="container">
            <div class="row"> 
                <div class="col-md-6 hero-text">
                    <h1>Adquiere en E.U </h1>
                    <h2 class="degradado">Recibe en NLD y CDMX</h2>
                    <form class="hero-subscribe-from" id="rastreo" method="POST" action="rastreo.php">
                        <label for="">Rastrea tu pedido, con tu número de tracking original</label>
                        <input type="text" id="txtTrack" name="txtTrack" placeholder="Ingrese el tracking">
                        <button class="site-btn sb-gradients" type="submit">Buscar</button>
                    </form>
                </div>
                <div class="col-md-6">
				<!-- 	<img src="img/laptop.png" class="laptop-image" alt=""> -->
				</div> 
            </div>
        </div>
    </section>
    <!-- Inicio section end -->
    
    <!-- Cotizador -->
    <section class="about-section spad" id="cotiza">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 ">
                    <div class="single-blog-page blog-text">
                        <blockquote>
                            Servicio base de $200 MXN
                            <p>Ampara artículos con un peso máximo de 3 libras y valor un valor inferior a $100 USD.</p>
                        </blockquote>
                        <ul>
                            <li type="circle">
                                <p class="blog-title" style="font-size: 18px; color: #39b14a;">Artículos con un peso
                                    superior a 3 libras se cobra un cargo de $75 MXN por cada libra excedente.</p>
                            </li>
                            <li type="circle">
                                <p class="blog-title" style="font-size: 18px; color: #39b14a;">Artículos con un valor
                                    superior a los $100 USD se cobra un interés del 16% basándonos en el valor del
                                    producto.</p>
                            </li>
                            <li type="circle">
                                <p class="blog-title" style="font-size: 18px; color: #39b14a;">Si quieres asegurar tú
                                    envío se te cobrara un 5% del valor del producto.</p>
                            </li>
                        </ul>
                        
                        <br>
                    </div>

                </div>
                <div class="col-lg-6 ">
                    <div class="widget-area">    
                        <h2 class="degradado">Cotiza tu envio</h2>
                        <p>Ingresa los datos respectivos de tu paquete y así obten un aproximado de cuánto te costará el envío.</p>
                        <form class="contact-form" id="cotizador" method="post">
                            <label for="">Ingresa el peso en <b>libras</b></label>
                            <input type="number" name="peso" id="peso" required="" step="any" placeholder="0 lbs">
                            <label for="">Ingresa el valor en <b>dolares</b></label>
                            <label for=""></label>
                            <input type="number" name="valor" id="valor" required="" step="any" placeholder="0 dlls">
                            <div class="contact-type">
									<label class="ct-label">Asegurar envio
                                        <input type="checkbox" name="seguro" id="seguro">
										 <span class="checkmark"></span>
									</label>
								</div>
                            <!-- <input type="text" placeholder="Enter your email"> -->
                            <button class="site-btn sb-full-- sb-gradients" type="submit">Cotiza</button>
                            <!-- <input value="Cotizar" class="register-submit" id="cotizador" type="button" onclick="cotizacion()"> -->
                            
                            <div class="card-body" id="mostrarTotal" style="display: none;">
                                <h4 id="total" class="degradado">El costo aproximado de su envío será de $200 MXN. (No incluye seguro)</h4>
                                <!-- <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5> -->
                                <p>El costo de envio de su paquete puede variar si el peso no coincide con los datos antes proporcionados.</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Final cotizador -->
    
        <!-- Cobertura -->
    <section class="features-section spad gradient-bg">
        <div class="container text-white">
            <div class="section-title text-center">
                <h2>Cobertura del servicio</h2>
            </div>
            <div class="row">
                <!-- feature -->
                <div class="col-md-9">
                    <div>
                        <h4 class="text-center">Area metropolitana de CDMX</h4>
                        <br><br>
                        <div class="row">
                            <div class="col-md-3">
                                <ul>
                                    <li type="circle">Gustavo A Madero</li>
                                    <li type="circle">Azcapotzalco</li>
                                    <li type="circle">Miguel Hidalgo</li>
                                    <li type="circle">Cuauhtémoc</li>
                                    <li type="circle">Venustiano Carranza</li>
                                    <li type="circle">Cuajimalpa</li>
                                    <li type="circle">Álvaro Obregón</li>
                                    <li type="circle">Benito Juárez</li>
                                    <li type="circle">Iztacalco</li>
                                    <li type="circle">La Magdelena Contretas</li>
                                    <li type="circle">Tlalpan</li>
                                    <li type="circle">Coyoacán</li>
                                    <li type="circle">Iztapalapa</li>
                                    <li type="circle">Xochimilco</li>
                                    <li type="circle">Tláhuac</li>
                                    <li type="circle">Milpa Alta</li>
                                    <li type="circle">Cuautitlán</li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <ul>
                                    <li type="circle">San Pablo De Las Salinas</li>
                                    <li type="circle">Tultepec (Revision)</li>
                                    <li type="circle">Tultitlan De Mariano Escobedo</li>
                                    <li type="circle">Buenavista</li>
                                    <li type="circle">Ojo De Agua</li>
                                    <li type="circle">San Francisco Coacalco</li>
                                    <li type="circle">Ecatepec Morelos</li>
                                    <li type="circle">Tlalnepantla De Baz</li>
                                    <li type="circle">Tepotzotlán</li>
                                    <li type="circle">San Juan Ixtayopan</li>
                                    <li type="circle">San Pedro Atocpan</li>
                                    <li type="circle">San Miguel Topilejo</li>
                                    <li type="circle">San Miguel Ajusco</li>
                                    <li type="circle">Chimalhuacán</li>
                                    <li type="circle">Nezahualcóyotl</li>
                                    <li type="circle">Texcoco</li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <ul> 
                                    <li type="circle">Los Reyes Acaquilpan</li>
                                    <li type="circle">Chicoloapan de Juárez</li>
                                    <li type="circle">Chicoloapan de Juárez</li>
                                    <li type="circle">Montecillo</li>
                                    <li type="circle">Coatepec</li>
                                    <li type="circle">San Francisco Acuautla</li>
                                    <li type="circle">Ixtapaluca</li>
                                    <li type="circle">Valle Del Chalco Solidaridad</li>
                                    <li type="circle">San Marcos Huixtoco</li>
                                    <li type="circle">Chalco De Diaz Covarrubias</li>
                                    <li type="circle">San Martin Cuautla</li>
                                    <li type="circle">Chicoloapan de Juárez</li>
                                    <li type="circle">Amecameca</li>
                                    <li type="circle">Teotihuacan</li>
                                    <li type="circle">Acolman</li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <ul>
                                    <li type="circle">Naucalpan De Juárez</li>
                                    <li type="circle">Ciudad Satélite</li>
                                    <li type="circle">Ciudad López Mateos</li>
                                    <li type="circle">Melchor Ocampo</li>
                                    <li type="circle">Huixquilucan</li>
                                    <li type="circle">Atizapan De Zaragoza (Adolfo Lopez Mateos)</li>
                                    <li type="circle">Nextlalpan</li>
                                    <li type="circle">Tecámac</li>
                                    <li type="circle">Tepetlaoxtoc</li>
                                    <li type="circle">Tlalmanalco De Velázquez</li>
                                    <li type="circle">Tepotzotlán</li>
                                    <li type="circle">Nicolas Romero [México]</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- feature -->
                <div class="col-md-3">
                    <div>
                        <h4 class="text-center" style="color: #DEE3EB;">Nuevo Laredo</h4>
                        <br><br>
                        <p class="text-center" style="color: #DEE3EB;">Ciudad de Nuevo Laredo</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!-- Final Cobertura -->
    
    <!-- ¿Como funciona? -->
    <section class="blog-section spad" id="funcionamiento">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="degradado">¿Cómo funciona nuestro servicio?</h2>
            </div>
            <div class="row" style="display:flex;">
                <!-- blog item -->
                <div class="col-md-4 blog-div">
                    <div class="blog-item">
                        <figure class="blog-thumb">
                            <img src="img\JP-INFO-1.png" alt="">
                        </figure>
                        
                        <div class="blog-text">
                            <h5 class="blog-title"> 1. Regístrate en JaguarPack y obtén tu dirección en USA.</h5>
                            <p>Esta será su dirección dentro de los Estados Unidos. <br> Tenerla no le generará tarifas ni cargos. <br> <br></p>
                        </div>
                    </div>
                </div>
                <!-- blog item -->
                <div class="col-md-4 blog-div">
                    <div class="blog-item">
                        <figure class="blog-thumb">
                            <img src="img\JP-INFO-2.png" alt="">
                        </figure>
                        <div class="blog-text">
                            <!-- <div class="post-date">28 dec 2018</div> -->
                            <h5 class="blog-title">2. Compre en cualquier tienda de USA. Y envíela a su nueva dirección
                                de USA.</h5>
                            <p>Utilice la dirección que le proporcionamos para recibir sus compras en nuestra bodega en USA.</p>
                        </div>
                    </div>
                </div>
                <!-- blog item -->
                <div class="col-md-4 blog-div">
                    <div class="blog-item">
                        <figure class="blog-thumb">
                            <img src="img\JP-INFO-3.png" alt="">
                        </figure>
                        <div class="blog-text">
                            <!-- <div class="post-date">28 aug 2018</div> -->
                            <h5 class="blog-title">3. Rastrea y recibe tu pedido.</h5>
                            <p>Puedes rastrear tu pedido desde tu cuenta de JaguarPack, te dirá el último estatus de tu paquete. <br> <br> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Final ¿Como funciona? -->

    <!-- Experiencia -->
    <section class="fact-section gradient-bg">
        <div class="container text-white">
            <div class="section-title text-center">
                <h3>LA EXPERIENCIA HABLA POR NOSOTROS</h3>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="fact">
                        <h2>200</h2>
                        <p>clientes <br> Satisfechos</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="fact">
                        <h2>400</h2>
                        <p>Paquetes <br> entregados <br> por semana</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="fact">
                        <h2>6</h2>
                        <p>importaciones <br> por semana</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Experiencia -->
    
    <!-- Sobre nosotros -->
    <section class="about-section spad" id="acerca">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6 about-text">
                    <h2 class="degradado">Compras rapidas, entregas rapidas</h2>
                    <!-- <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5> -->
                    <p>Somos un servicio de almacenamiento y envío de compras a bajo costo, hacemos el puente para que puedas comprar 
                        tus productos en tiendas online en EU, enviar a tu dirección en EU, almacenarla y despacharla hasta tu hogar.</p>
                    <a href="https://www.jaguarpack.com/app/registro.php" class="site-btn sb-gradients">Registrate</a>
                </div>
            </div>
            <div class="about-img">
                <img src="img/camion.png" alt="">
            </div>
        </div>
    </section>
     <!-- Final Sobre nosotros -->

    <!-- Newsletter section -->
    <section class="newsletter-section gradient-bg">
        <div class="container text-white">
            <div class="row">
                <div class="col-lg-7 newsletter-text">
                    <h2>Suscríbete  a nuestro boletín</h2>
                    <p>Recibe noticias y nuevas ofertas continuamente.</p>
                </div>
                <div class="col-lg-5 col-md-8 offset-lg-0 offset-md-2">
                    <form class="newsletter-form">
                        <input type="text" placeholder="Ingresa tu correo">
                        <button>Suscríbete </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter section end -->

    <!-- Footer section -->
    <footer class="footer-section">
        <div class="container">
            <div class="row spad">
                <div class="col-md-6 col-lg-4 footer-widget">
                    <img src="img/logo3.png" class="mb-4" alt="">
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum euismod nisl ac convallis.
                        Nulla eget mattis sem. Donec nec maximus leo. Donec efficitur lacus a urna auctor. </p> -->
                </div>
                <div class="col-md-6 col-lg-3 offset-lg-1 footer-widget">
                    <h5 class="widget-title">Contacto</h5>
                    <ul>
                        <li><a href="mailto:contacto@jaguarpack.com"><b>Correo: </b>contacto@jaguarpack.com</a></li>
                        <li><a href="tel:8677141102"><b>Teléfono: </b>867 714 1102</a></li>
                        <li><a href="https://goo.gl/maps/Z33wVpzHs9b5e5f89"><b>Dirección: </b>Aldama 2103, Juárez, 88209 Nuevo Laredo, Tamps.</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-4 footer-widget pl-lg-5 pl-3">
                    <h5 class="widget-title">Siguenos en redes sociales</h5>
                    <div class="social">
                        <a href="https://www.facebook.com/JaguarPack-109423444837073/" class="facebook"><i class="fa fa-facebook"></i></a>
                        <!-- <a href="" class="instagram"><i class="fa fa-instagram"></i></a> -->

                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-lg-8 store-links text-center text-lg-left pb-3 pb-lg-0">
                        <a>Conoce nuestros otros servicios: </a> <br>
                        <a href="https://www.controldecarga.com/" target="_blank"><img src="img/LOGOCDC.png" alt="" width="50" height="50"></a>
                        <a href="https://controldecompras.com.mx/" target="_blank"><img src="img/LOGOCOMPRAS.png" alt="" width="50" height="50"></a> 
                        <a href="https://www.rapicarga.mx/" target="_blank"><img src="img/LOGORAPI.png" alt="" width="50" height="50"></a> 
                    </div>
                    <div class="col-lg-4 text-center text-lg-right">
                        <ul class="footer-nav">
                            <li><a href="">Términos de uso</a></li>
                            <li><a href="">Política de privacidad</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--====== Javascripts & Jquery ======-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.9/dist/sweetalert2.all.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>