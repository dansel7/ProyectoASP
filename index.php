<?php session_start(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <title>Hackaton - Info Util El Salvador</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/templatemo_misc.css">
    <link rel="stylesheet" href="css/templatemo_style.css">
    <link rel="stylesheet" type="text/css" href="css/style1.css" />
    
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
     
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>
    <script type="text/javascript" src="js/geolocalizacion.js"></script>
    <script type="text/javascript" src="js/localizacion.js"></script>
    <script type="text/javascript" src="js/ajax.js"></script>
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/jqueryfunciones.js"></script>
    
    <script src="js/modernizr.custom.63321.js"></script>
    
    <style>
        #map-canvas-p { 
        height: 100%;
        margin: 0px;
        padding: 100px
      }
       #map-canvas-h {
        height: 100%;
        margin: 0px;
        padding: 100px
      }
       #map-canvas-f {
        height: 100%;
        margin: 0px;
        padding: 100px
      }
      #map-localizar {
        height: 100%;
        margin: 0px;
        padding: 100px
      }
    input
    {
        box-shadow:inset 0 0 2px 2px #888;
    }
      
    </style>
    
   
    
      <script>
       function hospital_map()
       {
           set_tipo('hospital');
           initialize();
       }
      function police_map(){
            set_tipo('police');
            initialize();
       }
        function food_market_map(){
            set_tipo('grocery_or_supermarket');
            initialize();
       }
       function locale()
       {
           
           set_tipo('veterinary_care');
            initialize();
       }

       
    </script>
    
    <script>
        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
     </script>
    
   

</head>
<body>
     <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                        js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&appId=142489082613367&version=v2.0";
                            fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));</script>
    
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
    <div class="bg-overlay"></div>

    <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-4 col-sm-12">
                <div class="sidebar-menu">
                    
                    <div class="logo-wrapper">
                        <h1 class="logo">
                            <a rel="nofollow" href="http://infoutil.gobiernoabierto.gob.sv"><img src="images/logo2.png" alt="Circle - Free HTML5 Templates">
                            </a>
                        </h1>
                    </div> <!-- /.logo-wrapper -->
                    
                    <div class="menu-wrapper">
                         <div class="sidebar-menu">
                        <ul class="menu">
                            <li><a class="homebutton" href="#">Home</a></li>
                            <li><a class="show-1" href="#">Noticias</a></li>
                            <li><a class="show-2" href="#" onclick="food_market_map();">Alimentos</a></li>
                            <li><a class="show-3" href="#" onclick="hospital_map();" >Salud</a></li>
                            <li><a class="show-4" href="#" onclick="police_map();"  >Seguridad</a></li>
                            <li><a class="show-5" href="#" onclick=""  >Localizate</a></li>
                        </ul> <!-- /.menu -->
                        <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>
                    </div> <!-- /.menu-wrapper -->
                    <!--Arrow Navigation-->
                    <a id="prevslide" class="load-item"><i class="fa fa-angle-left"></i></a>
                    <a id="nextslide" class="load-item"><i class="fa fa-angle-right"></i></a>
                    
                </div> <!-- /.sidebar-menu --><br>
                </div>
            </div> <!-- /.col-md-4 -->

            <div class="col-md-8 col-sm-12">
                
                <div id="menu-container">
                    
                    <div id="menu-1" class="about content">
                        <div class="row">
                            <ul class="tabs">
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab1" class="icon-item" >
                                        <i class="fa fa-plus-square"></i>
                                        <div id="notify_medicina"></div>
                                    </a> <!-- /.icon-item -->
                                </li>
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab2" class="icon-item">
                                        <i class="fa fa-camera"></i>
                                    </a> <!-- /.icon-item -->
                                </li>
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab3" class="icon-item">
                                        <i class="fa fa-coffee"></i>
                                    </a> <!-- /.icon-item -->
                                </li>
                            </ul> <!-- /.tabs -->
               <div class="col-md-12 col-sm-12">
                        <form id="tab1">
                            <fieldset class="col-md-4" >
                                <br><br><br>
         
                                
                                     <input  type="text" value="" id="notify_buscar" name="notify_buscar" placeholder="Hacer una busqueda"  />
                                
                                     <input type="button" name="cmd_buscar_med" id="cmd_buscar_med" value="Buscar" onclick="get_med_act(document.getElementById('notify_buscar').value,null);" />
                             </fieldset>
                            <div class="toggle-content" id="show_notify_med" >
                                <div id="informacion-medicamentos-resp"> 
			       <h3>
                                    <img src="images/medicina.png" width="100" height="100" />
                                            Favor Seleccione una categoria o realice una busqueda
				</h3>
				</div> 
                             </div>
                            </form>
                                
                                <div class="toggle-content text-center" id="tab2">
                                    <h3>What We Do</h3>
                                    <p>Donec quis orci nisl. Integer euismod lacus nec risus sollicitudin molestie vel semper turpis. In varius imperdiet enim quis iaculis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris ac mauris aliquam magna molestie posuere in id elit. Integer semper metus felis, fringilla congue elit commodo a. Donec eget rutrum libero.
                                    <br><br>Nunc dui elit, vulputate vitae nunc sed, accumsan condimentum nisl. Vestibulum a dui lectus. Vivamus in justo hendrerit est cursus semper sed id nibh. Donec ut dictum lorem, eu molestie nisi. Quisque vulputate quis leo lobortis fermentum. Ut sit amet consectetur dui, vitae porttitor lectus.</p>
                                </div>

                                <div class="toggle-content text-center" id="tab3">
                                    <h3>Our Team</h3>
                                    <p>Aliquam erat volutpat. Vivamus tempus, nisi varius imperdiet molestie, velit mi feugiat felis, sit amet fringilla mi massa sit amet arcu. Mauris dictum nisl id felis lacinia congue. Aliquam lectus nisi, sodales in lacinia quis, lobortis vel sem. Vestibulum elit nisi, placerat eget auctor ut, dictum at libero.
                                    <br><br>Proin enim odio, eleifend eget euismod vitae, pharetra sed lacus. Donec at sapien nunc. Mauris vehicula quis diam nec dignissim. Nulla consequat nibh mattis metus sodales, at eleifend tortor tempor. Sed auctor lacus felis. </p>
                                </div>
                            </div> <!-- /.col-md-12 -->
                        </div> <!-- /.row -->
                        

                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                <?php
                                    $registro ='<h4>Registrate</h4>
                                    <br>
                                     <div class="thumb">
                                         <a href="registro_facebook.php" >
                                             <img src="images/todo/Facebook-icon.png" alt="Registro facebook">
                                         </a>
                                         <br>
                                         <a href="registro_twitter.php" >
                                             <img src="images/todo/new_twitter.png" alt="Registro twitter">
                                         </a>
                                    </div>';
                                    
                                    if(!isset($_SESSION['id']))
                                    {
                                        echo $registro;
                                    }
                                    else
                                    {
                                        $usuario_data = '<h4>¡Bienvenido!</h4>'
                                                . '<span>' .$_SESSION['nombre'] . '</span>'
                                                . '<br><br><img src="' .$_SESSION['imagen'] . '" width="70" height="70"/>'
                                                . '<a href="logout.php" class="icon-item">
                                                     <i class="fa fa-lock"></i>
                                                       <br>Cerrar sesion
                                                    </a>';
                                        echo $usuario_data;
                                    }
                                    
                                 ?>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                   <?php
                                    $login = ' <div class="thumb">
                                    <img src="images/todo/boton_iniciar_sesion.png" >
                                    </div>
                                    <form id="frm_sesion" method="post" action="login.php">
                                        <br><br>
                                        <input id="user" name="user" type="text" placeholder="Usuario o E-Mail" />
                                        <br>
                                        <input id="pass" name="pass" type="password" placeholder="Contraseña" />
                                        <input type="submit" value="Acceder" />';
                                        
                                            if(isset($_GET["log_err"]))
                                            {
                                                $login .= "<span>Usuario o contraseña incorrecta</span>";
                                            }
                                        
                                    $login .= '</form>';
                                   
                                   
                                      if(!isset($_SESSION['id']))
                                      {
                                          echo $login; 
                                      }
                                      else
                                      {
                                          $icon = '';
                                          $is_fb = FALSE;
                                          $sesion = null;
                                          if($_SESSION['facebook'] == true)
                                          {
                                              $is_fb = true;
                                              $icon = "images/todo/fb.png";
                                              $sesion = ''
                                                  . '<img src="'.$icon.'" width="50" height="50" />'
                                                  . '<br><br><div class="fb-share-button" data-href="https://www.facebook.com/GobiernoAbiertoSV?ref=ts&amp;fref=ts"></div>'
                                                      . '<br><br><div class="fb-like-box" data-href="https://www.facebook.com/GobiernoAbiertoSV?ref=ts&amp;fref=ts" data-width="10" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>'
                                                      . '';
                                          }
                                          else
                                          {
                                              $icon = "images/todo/twitter.png";
                                              $sesion = ''
                                                  . '<img src="'.$icon.'" width="50" height="50" />'
                                                      . '<br><br><span>Danos un Tweet</span><br><br>'
                                                      . '<a href="https://twitter.com/intent/tweet?screen_name=InfoUtilSV" class="twitter-mention-button" data-lang="en">Tweet to @infoutil</a>'
                                                      . '<p><a href="https://twitter.com/intent/favorite?tweet_id=99530515043983360">Favoritos</a></p>'
                                                      . '<a class="twitter-timeline" href="https://twitter.com/InfoUtilSV/favorites" data-widget-id="492765165746540545">Tweets Favoritos de @InfoUtilSV</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?"http":"https";if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>';
                                                 
                                          }
                                          
                                         
                                          
                                          echo $sesion;
                                   
                                      }
                                   ?>
                                   
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                           
                                
                                    <?php
                                        
                                         if(isset($_SESSION['id']))
                                         {
                                             echo ' <div class="col-md-4 col-sm-4"><div class="member-item">';
                                           
                                            if($is_fb)
                                            {
                                                $sesion = '<span>Danos tu opinion</span><br><br><br>'
                                                        . '<div class="fb-comments" data-href="http://infoutil.gobiernoabierto.gob.sv/" data-width="200" data-numposts="8" data-colorscheme="light"></div>';
                                            }
                                            else
                                            {
                                                $sesion  = '<a class="twitter-timeline" href="https://twitter.com/InfoUtilSV" '
                                                        . 'data-widget-id="492750463066857472">Tweets por @InfoUtilSV</a>'
                                                        . '<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?"http":"https";if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");'
                                                        . '</script>';

                                            }
                                            
                                            echo $sesion;
                                         }
                                         echo ' </div> 
                                                </div> ';
                                    ?>
                             
                        </div> <!-- /.row -->
                    </div> <!-- /.about -->

                    <div id="menu-2" class="services content">
                        <div class="row">
                            <ul class="tabs">
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab4" class="icon-item">
                                        <i class="fa fa-cogs"></i>
                                    </a> <!-- /.icon-item -->
                                </li>
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab5" class="icon-item">
                                        <i class="fa fa-leaf"></i>
                                    </a> <!-- /.icon-item -->
                                </li>
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab6" class="icon-item">
                                        <i class="fa fa-users"></i>
                                    </a> <!-- /.icon-item -->
                                </li>
                            </ul> <!-- /.tabs -->
                            
                            <div class="col-md-12 col-sm-12">
                                
                            <div class="toggle-content text-center"  id="tab4">
                                    
                            <div class="col-md-12">
                                <h4>Establecimientos y Supermercados </h4>
                                <div class="toggle-content  spacing">
                                    <h3>Lugares mas cercanos</h3>
                                     <div id="informacion-food">
                                    </div>
                                </div>
                                 
                            </div> 

                             
                            </div> 
                             
                             
                                
                           
                                <div class="toggle-content text-center" id="tab5">
                                    <h3>Ubicacion de Mejores Precios</h3>
                                   
                                </div>
                                
                             

                                <div class="toggle-content text-center" id="tab6">
                                    <h3>Datos Importantes</h3>
                                    <p>Etiam dictum, quam quis pharetra tincidunt, enim nunc faucibus ipsum, vitae condimentum ligula est eu dui. Sed tincidunt tincidunt sapien non feugiat. Aenean lacinia tempor leo, et euismod ligula porta non. Quisque lectus ante, rutrum eu neque volutpat, euismod lobortis velit. Suspendisse felis risus, tempor ac vehicula eu, volutpat volutpat sem. Donec quis orci nisl. Integer euismod lacus nec risus sollicitudin molestie vel semper turpis.
                                    <br><br>In varius imperdiet enim quis iaculis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris ac mauris aliquam magna molestie posuere in id elit. Integer semper metus felis, fringilla congue elit commodo a. Donec eget rutrum libero.</p>
                                </div>
                            </div> <!-- /.col-md-12 -->
                            
                            <div class="col-md-12">
                                    <div class="google-map">
                                        <div id="map-canvas-f" ></div> 
                                    </div> 
                                </div>       
                            
                            <div class="toggle-content ">
                                
                                 <div class="fb-comments" 
                                      data-href="http://infoutil.gobiernoabierto.gob.sv/products?search%5Bcategory_id%5D=9" 
                                      data-width="%20" data-numposts="8" data-colorscheme="light">
                                 </div>
                             </div>
                        </div> <!-- /.row -->
                    </div> <!-- /.services -->
     
                    <div id="menu-3" class="services content">
						<div class="row">
			
							<div class="col-md-12 col-sm-12">
								
									
										<div class="contact-form">
                          
                                    
											<div class="row">
												<form action="#" method="post">
                                   
													<fieldset class="col-md-4">
														<section >
															<select id="medicina_select" name="medicina_select" >
															<?php
																require_once 'medicina_selector.php';
															?>
															</select>
														</section>
													</fieldset>
													<fieldset class="col-md-4">
													</fieldset>
													<fieldset class="col-md-4">
														<input id="name" type="text" 
															name="txt_med" id="txt_med" 
															placeholder="Buscar una medicina" onkeyup="get_medicina(null , this.value);" />
													</fieldset>
												</form>
											</div>
										</div>
										<div class="toggle-content spacing">
											<h3>Medicamentos</h3>
											<div id="informacion-medicamentos">
                                 
												<h3>
												<img src="images/medicina.png" width="100" height="100" />
												Favor Seleccione una categoria o realice una busqueda
												</h3>
											</div>
										</div>
									
								
	
									<div class="col-md-12">
										<div class="toggle-content spacing">
											<h3>Establecimientos de salud mas cercanos</h3>
											<div id="informacion-hospital">
                                         
											</div>
										</div>
									</div> 
                            
									<div class="col-md-12">
										<div class="google-map">
											<div id="map-canvas-h" ></div> 
										</div> 
									</div> 
									
									<div class="toggle-content spacing">
									<div class="fb-comments" 
                                                                             accesskey=""data-href="http://infoutil.gobiernoabierto.gob.sv/medicines" 
                                                                             data-width="%20" data-numposts="8" data-colorscheme="light">
									</div>
                                                                         </div>
							
							</div>
						</div> 
                    </div> 

                    <div id="menu-4" class="contact content">
                        <div class="row">
                          
                            <div class="col-md-12">
                                <div class="toggle-content text-center spacing">
                                    <h3>Delegaciones</h3>
                                </div>
                                <div class="toggle-content  spacing">
                                    <h3>Delegaciones mas cercanas</h3>
                                     <div id="informacion-police">
                                    </div>
                                </div>
                            </div> 
                            
                            <div class="col-md-12">
                                <div class="google-map">
                                      <div id="map-canvas-p" ></div> 
                                </div> 
                            </div> 
                        </div> <!-- /.row -->
                    </div> <!-- /.contact -->
                    
                    <div id="menu-5" class="contact content">
                        <div class="row">
                          
                            <div class="col-md-12">
                                <div class="toggle-content text-center spacing">
                                    <h3>Localizate</h3>
                                    <a href="#" onclick="locale();">DALE</a>
                                </div>
                                <div class="toggle-content  spacing">    
                                     <div id="informacion-localizar">
                                    </div>
                                </div>
                            </div> 
                            
                            <div class="col-md-12">
                                <div class="google-map">
                                      <div id="map-localizar" ></div> 
                                </div> 
                            </div> 
                        </div> <!-- /.row -->
                    </div>

                </div> <!-- /#menu-container -->

            </div> <!-- /.col-md-8 -->

        </div> <!-- /.row -->
    </div> <!-- /.container-fluid -->
    
    <div class="container-fluid">   
        <div class="row">
            <div class="col-md-12 footer">
                <p class="footer-text">Copyright &copy; 2014 <a href="#">Hackaton</a> - <a rel="nofollow" href="http://infoutil.gobiernoabierto.gob.sv/"> </a> by <a rel="nofollow" href="">DAM Code</a></p>
            </div><!-- /.footer --> 
        </div>
    </div> <!-- /.container-fluid -->

  	
    <script type="text/javascript">
			
		$( function() {
                    
                               
				$( '#medicina_select' ).dropdown( {
					gutter : 60,
                                        stack: false,
                                        delay: 25,
                                        slidingIn: 100,
                                        onOptionSelect: function(opt) {
                                            var valor = (opt.data('value'));
                                            get_medicina(valor , null);
                                            
                                        }
				});
                                
                            
                              
                              carga_notificaciones();
		});
                
                function carga_notificaciones()
                {
                    get_med_act('','init');
                    //cargando las notificaciones medicina y alimentos
                     var parametros = {
                        'medicina' : 'true'
                    };
                     $.ajax({
                            data:  parametros,
                            url:   'notificaciones.php',
                            type:  'post',
                            beforeSend: function () {
                                  $( "#notify_medicina" ).html('<div><img src="images/loading.gif" width="70px" height="70px"/></div>');     
                            },
                            success:  function (response) {
                                $( "#notify_medicina" ).html(response);
                            }
                        });
          
                }
                
                function get_med_act(busqueda, norm)
               {
        
                var parametros={
                    'busqueda': busqueda,
                    'norm':norm
                };
        
                $.ajax({
                    data:  parametros,
                    url:   'medicina_selector_resp.php',
                    type:  'post',
                    beforeSend: function () {
                        $( "#informacion-medicamentos-resp").html('<div><img src="images/loading.gif" width="70px" height="70px"/></div>');     
                    },
                    success:  function (response) {
                         $( "#informacion-medicamentos-resp" ).html(response);
                    }
                
                });
        
    }

		</script>
               
    <script src="js/vendor/jquery-1.10.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
    <script src="js/jquery.easing-1.3.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
     <script type="text/javascript">
            
			jQuery(function ($) {

                $.supersized({

                    // Functionality
                    slide_interval: 3000, // Length between transitions
                    transition: 1, // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
                    transition_speed: 700, // Speed of transition

                    // Components                           
                    slide_links: 'blank', // Individual links for each slide (Options: false, 'num', 'name', 'blank')
                    slides: [ // Slideshow Images
                        {
                            image: 'images/templatemo-slide-1.jpg'
                        }, {
                            image: 'images/templatemo-slide-2.jpg'
                        }, {
                            image: 'images/templatemo-slide-3.jpg'
                        }, {
                            image: 'images/templatemo-slide-4.jpg'
                        }
                    ]

                });
            });
            
    </script>
     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.dropdown.js"></script> 
      
    
</body>
</html>
