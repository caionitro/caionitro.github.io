<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>União Acabamentos</title>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <!-- <link href="css/heroic-features.css" rel="stylesheet"> -->
    <link href="css/depositoUniao.css" rel="stylesheet">
    <link rel="stylesheet" href="/bower_components/animate.css/animate.min.css">
    <link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.min.css">
    <script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="./images/Logo.png" class="img-responsive logoNavbar" />
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#produto">Produtos</a>
                    </li>
                    <li>
                        <a href="#sobre">Sobre</a>
                    </li>
                    <li>
                        <a href="#contato">Contato</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Jumbotron Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class=""></li>
            <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
            <!-- <li data-target="#myCarousel" data-slide-to="2" class=""></li> -->
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('./images/frenteDiaBanner.jpg');"></div>
                <div class="carousel-caption">
                    <!-- <h2>Caption 1</h2> -->
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('./images/frenteNoiteBanner.jpg');"></div>
                <div class="carousel-caption">
                    <!-- <h2>Caption 2</h2> -->
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>

    <!-- Page Content -->
    <div class="container">

        <hr>

        <!-- Title -->
        <div class="row text-center" id="produto">
                <h3>Produtos</h3>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
          <div class="categories">
            <ul class="cat">
              <li>
                <ol class="type">
                  <li><a href="#" data-filter="*" class="active">Todos</a></li>
                  <li><a href="#" data-filter=".loucas">Loucas</a></li>
                  <li><a href="#" data-filter=".cubas">Cubas</a></li>
                  <li><a href="#" data-filter=".metais">Metais</a></li>
                  <li><a href="#" data-filter=".pisos">Pisos</a></li>
                </ol>
              </li>
            </ul>
          </div>

          <div class="row">
            <div class="portfolio-items">
              <div class="col-sm-6 col-md-3 col-lg-3 cubas">
                <div class="portfolio-item wow fadeInUp" data-wow-delay="200ms">
                  <div class="hover-bg"> <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                    <div class="hover-text">
                      <h4>Cubas</h4>
                      As melhores cubas, de embutir e sobrepor
                      <div class="clearfix"></div>
                    </div>
                    <img src="images/Cubas.png" class="img-responsive" alt="Project Title"> </a> </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3 loucas">
                <div class="portfolio-item wow fadeInUp" data-wow-delay="400ms">
                  <div class="hover-bg"> <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                    <div class="hover-text">
                      <h4>Louças</h4>
                      Louças para você usar a vida toda!
                      <div class="clearfix"></div>
                    </div>
                    <img src="images/Loucas.png" class="img-responsive" alt="Project Title"> </a> </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3 metais">
                <div class="portfolio-item wow fadeInUp" data-wow-delay="600ms">
                  <div class="hover-bg"> <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                    <div class="hover-text">
                      <h4>Metais</h4>
                      Os metais mais lindos para seu lar
                      <div class="clearfix"></div>
                    </div>
                    <img src="images/Metais.png" class="img-responsive" alt="Project Title"> </a> </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3 pisos">
                <div class="portfolio-item wow fadeInUp" data-wow-delay="800ms">
                  <div class="hover-bg"> <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                    <div class="hover-text">
                      <h4>Pisos</h4>
                      Pisos para revestir sua obra de muito glamour
                      <div class="clearfix"></div>
                    </div>
                    <img src="images/Pisos.png" class="img-responsive" alt="Project Title"> </a> </div>
                </div>
              </div>
            </div>
          </div>

            <!-- <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="./images/Cubas.png" alt="">
                    <div class="caption">
                        <h3>Cubas</h3>
                        <p>As melhores cubas, de embutir e sobrepor</p>
                        <p><a href="#" class="btn btn-primary">Mais sobre...</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="./images/Loucas.png" alt="">
                    <div class="caption">
                        <h3>Louças</h3>
                        <p>Louças para você usar a vida toda!</p>
                        <p><a href="#" class="btn btn-primary">Mais sobre...</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="./images/Metais.png" alt="">
                    <div class="caption">
                        <h3>Metais</h3>
                        <p>Os metais mais lindos para seu lar</p>
                        <p><a href="#" class="btn btn-primary">Mais sobre...</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="./images/Pisos.png" alt="">
                    <div class="caption">
                        <h3>Pisos</h3>
                        <p>Pisos para revestir sua obra de muito glamour</p>
                        <p><a href="#" class="btn btn-primary">Mais sobre...</a></p>
                    </div>
                </div>
            </div> -->


        <hr>

        <div class="row text-center" id="sobre">
          <h3>Sobre</h3>
        </div>

        <div class="row">
            <div class="col-sm-8 col-md-8">

            </div>
            <div class="col-sm-4 col-md-4">
              <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
            </div>
        </div>

        <hr>

        <div class="row text-center" id="contato">
          <h3>Contato</h3>
        </div>

        <div class="row text-center">
          <div class="col-md-4">
            <i class="fa fa-map-marker fa-2x"></i>
            <p>Av. Munhoz da Rocha, 240</p>
            <p>Mandaguaçu</p>
          </div>
          <div class="col-md-4">
            <i class="fa fa-envelope-o fa-2x"></i>
            <p>depuniao@depuniao.com.br</p>
          </div>
          <div class="col-md-4">
            <i class="fa fa-phone fa-2x"></i>
            <p>(44) 3245 - .....</p>
          </div>
        </div>

      	<div class="row">
          <div class="col-sm-12 col-md-12">
            <div style="overflow:hidden;">
              <div id="gmap_canvas" style="height:400px;width:100%;"></div>
            </div>
      	  </div>
        </div>

      </hr>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12 text-right">
                    <p>Copyright &copy; União Acabamentos <?php echo date('Y');?></p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <script src="bower_components/isotope/dist/isotope.pkgd.min.js"></script>
    <!-- WOW -->
    <script src="bower_components/wow/dist/wow.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <script type="text/javascript">
      $(window).load(function() {
        var $container = $('.portfolio-items');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
        $('.cat a').click(function() {
            $('.cat .active').removeClass('active');
            $(this).addClass('active');
            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });
      });
      $(document).ready(function() {
        new WOW().init();
      });


      function init_map(){
        var myOptions = {
          zoom:15,
          center:new google.maps.LatLng(-23.3510683,-52.09131409999998),
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          scrollwheel: false,
        };
        map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
        marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-23.3510683, -52.09131409999998)});
        infowindow = new google.maps.InfoWindow({content:"<b>Deposito Uni&atilde;o Acabamentos</b><br/>Av. Munhoz da Rocha, 240<br/> Mandagua&ccedil;&uacute;" });
        google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});
        infowindow.open(map,marker);
      }
      google.maps.event.addDomListener(window, 'load', init_map);
    </script>



</body>

</html>
