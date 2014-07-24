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

       
    </script>
    

</head>
<body>
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
                            <a rel="nofollow" href="http://infoutil.gobiernoabierto.gob.sv"><img src="images/logo.png" alt="Circle - Free HTML5 Templates">
                            <span>Gobierno Abierto</br>El Salvador</span></a>
                        </h1>
                    </div> <!-- /.logo-wrapper -->
                    
                    <div class="menu-wrapper">
                        <ul class="menu">
                            <li><a class="homebutton" href="#">Home</a></li>
                            <li><a class="show-1" href="#">Lo Nuevo</a></li>
                            <li><a class="show-2" href="#" onclick="food_market_map();">Alimentos</a></li>
                            <li><a class="show-3" href="#" onclick="hospital_map();" >Salud</a></li>
                            <li><a class="show-4" href="#" onclick="police_map();"  >Seguridad</a></li>
                        </ul> <!-- /.menu -->
                        <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>
                    </div> <!-- /.menu-wrapper -->
                    <!--Arrow Navigation-->
                    <a id="prevslide" class="load-item"><i class="fa fa-angle-left"></i></a>
                    <a id="nextslide" class="load-item"><i class="fa fa-angle-right"></i></a>

                </div> <!-- /.sidebar-menu --><br>
                <div class="sidebar-menu">
                   
                    <div style="position: relative; z-index: 10;color:greenyellow">
                         <h3 style="margin-bottom:0;background-color:white">Precios Actualizados</h3>
                    <div style="background-color: white; position:absolute; z-index:-1; top:0; left:0; right:0; bottom:0; opacity:0.6;"></div>

                        <ul id="list-items">
                            <script>
                            loadcontent(2,10);
                            </script>
                            <li id="more-items">
                     <a href="#" onclick="loadcontent(2,100)" >Cargar mas ...</a> 
                            </li>
                        </ul>
                    </div>
                </div>
            </div> <!-- /.col-md-4 -->

            <div class="col-md-8 col-sm-12">
                
                <div id="menu-container">

                    <div id="menu-1" class="about content">
                        <div class="row">
                            <ul class="tabs">
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab1" class="icon-item" >
                                        <i class="fa fa-umbrella"></i>
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
                   <br><br><br>
                        <form id="tab1">
                            <fieldset class="col-md-4" >
                                <input  type="text" value="" id="notify_buscar" name="notify_buscar" placeholder="Hacer una busqueda" />
                                  <fieldset class="col-md-4">
                                     <section >
                                         <select id="notify_vista_med" name="notify_vista_med" >
                                             <option value="-1" selected>Seleccionar Vista</option>
                                             <option value="1">Recientes</option>
                                             <option value="2">Ultimos 6 meses</option>
                                             <option value="3">Ultimo año</option>
                                    </select>
                                  </section> 
                                </fieldset>
                             </fieldset>
                            <div class="toggle-content" id="show_notify_med" >
                                  <h3>Our History</h3>
                                   <p>Circle is free HTML5 template from templatemo. Feel free to download, modify and use this template for your websites. You can easily change icons by <a rel="nofollow" href="http://fontawesome.info/font-awesome-icon-world-map/">Font Awesome</a>. Example: <strong>&lt;i class=&quot;fa fa-camera&quot;&gt;&lt;/i&gt;</strong> 
                                   <br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, repellat, aspernatur nihil quasi commodi laboriosam cumque est minus minima sit dicta adipisci possimus magnam. Sit, repudiandae, ut, error, voluptates aspernatur inventore quo earum reiciendis dolorum amet perspiciatis adipisci itaque voluptatum iste laboriosam sapiente hic autem blanditiis doloribus nihil.</p>
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
                                    <div class="thumb">
                                        <img src="images/team/member-1.jpg" alt="Tracy - Web Designer">
                                    </div>
                                    <h4>Tracy</h4>
                                    <span>Web Designer</span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="images/team/member-2.jpg" alt="Mary - Web Developer">
                                    </div>
                                    <h4>Mary</h4>
                                    <span>Web Developer</span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="images/team/member-3.jpg" alt="Julia - Creative Director">
                                    </div>
                                    <h4>Julia</h4>
                                    <span>Creative Director</span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
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
                                <div class="toggle-content text-center" id="tab4">
                                    <h4>Establecimientos y Supermercados </h4>
                            <div class="col-md-12">
                                <div class="toggle-content  spacing">
                                    <h3>Lugares mas cercanos</h3>
                                     <div id="informacion-food">
                                    </div>
                                </div>
                            </div> 
                            <br>
                             <div class="col-md-12">
                                <div class="google-map">
                                    <div id="map-canvas-f" ></div> 
                                </div> 
                            </div> 
                                </div>
                                
                           
                                <div class="toggle-content text-center" id="tab5">
                                    <h3>Ubicacion de Mejores Precios</h3>
                                     <div class="col-md-12">
                                <div class="google-map">
                                    <div id="map-canvas-f" ></div> 
                                </div> 
                            </div> 
                                </div>

                                <div class="toggle-content text-center" id="tab6">
                                    <h3>Datos Importantes</h3>
                                    <p>Etiam dictum, quam quis pharetra tincidunt, enim nunc faucibus ipsum, vitae condimentum ligula est eu dui. Sed tincidunt tincidunt sapien non feugiat. Aenean lacinia tempor leo, et euismod ligula porta non. Quisque lectus ante, rutrum eu neque volutpat, euismod lobortis velit. Suspendisse felis risus, tempor ac vehicula eu, volutpat volutpat sem. Donec quis orci nisl. Integer euismod lacus nec risus sollicitudin molestie vel semper turpis.
                                    <br><br>In varius imperdiet enim quis iaculis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris ac mauris aliquam magna molestie posuere in id elit. Integer semper metus felis, fringilla congue elit commodo a. Donec eget rutrum libero.</p>
                                </div>
                            </div> <!-- /.col-md-12 -->
						
                        </div> <!-- /.row -->
                    </div> <!-- /.services -->
     
                    <div id="menu-3" class="services content">
                         <div class="row">
                            <div class="col-md-12">
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
                                </div></div>
                                <div class="toggle-content spacing">
                                    <h3>Medicamentos</h3>
                                     <div id="informacion-medicamentos">
                                 
                                         <h3>
                                             <img src="images/medicina.png" width="100" height="100" />
                                             Favor Seleccione una categoria o realice una busqueda
                                         </h3>
                                    </div>
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
                                
                                $( '#notify_vista_med' ).dropdown( {
					gutter : 60,
                                        stack: false,
                                        delay: 25,
                                        slidingIn: 100
                                       /* onOptionSelect: function(opt) {
                                            var valor = (opt.data('value'));
                                            get_medicina(valor , null);
                                        }*/
				});
                                
                              carga_notificaciones();
		});
                
                function carga_notificaciones()
                {
                    
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
