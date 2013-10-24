
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="ico/favicon.png">
    <title>Parliament</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

  </head>
<!-- NAVBAR
================================================== -->
  <body>

    <div id="fb-root"></div>
    


    <div id="complete-container">  
<!-- header -->
      <div class="image-logo"></div>
      <div id="up-line-menu"></div>
      <div class="navbar-wrapper">
        <div class="container">
          <div class="navbar navbar-inverse navbar-static-top">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
              <div id="menu-top" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  <li id="menu-decoration"></li>
                   <li id="index-option" class="active"><a href="#home" onclick="loadIndex();">Home</a></li>
                      <li id="reservations-option"><a href="#reservations" onclick="loadReservations();">Reservations</a></li>
                      <li id="private-option"><a href="#private" onclick="loadPrivateParties();">Private Events</a></li>
                      <li id="menu-option"><a href="#menu" onclick="loadMenu();">Menu</a></li>
                      <li id="gallery-option"><a href="#gallery" onclick="loadGallery();">Gallery</a></li>
                      <li id="about-option"><a href="#about" onclick="loadAbout();">About</a></li>
                      <li id="contact-option"><a href="#contact"  onclick="loadContact();">Contact</a></li>
                  <li id="menu-decoration"></li>

                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div id="down-line-menu"></div>

  

    <!-- end header -->


      <!-- principal-content -->
      <div id="principal-content" class="principal-frame">

      </div>
      <div id="ornament-bg"></div>
      <!-- final principal-content -->

    

        <!--footer--> 
    <div id="footer-content">  
       <div id="up-line-footer"></div>
          <div  id="social-buttons">
            <ul>
              <li>
                  <a class="various" href="https://www.facebook.com/parliamentchicago/" target="_blank" ><div id="fb-bg"></div></a>
              </li>
              <li>
                 <a class="various" href="https://twitter.com/parliament_chi" target="_blank"><div id="tw-bg"></div></a>
              </li>
              <li>
                <a class="various"  href="http://instagram.com/parliamentchicago" target="_blank"><div id="in-bg"></div></a>
              </li>
              <li>
                <a class="various" href="#extra-footer-fb"><div id="fb-comment-bg"></div></a>
              </li>
              <li>
                  <div  id="menu-bottom" class="menu-footer">
                  <ul id="menu-footer-nav">
                      <li id="index-option-bottom" class="active"><a href="#home" onclick="loadIndex();">Home</a></li>
                      <li id="reservations-option-bottom"><a href="#reservations" onclick="loadReservations();">Reservations</a></li>
                      <li id="private-option-bottom"><a href="#private" onclick="loadPrivateParties();">Private Events</a></li>
                      <li id="menu-option-bottom"><a href="#menu" onclick="loadMenu();">Menu</a></li>
                      <li id="gallery-option-bottom"><a href="#gallery" onclick="loadGallery();">Gallery</a></li>
                      <li id="about-option-bottom"><a href="#about" onclick="loadAbout();">About</a></li>
                      <li id="contact-option-bottom"><a href="#contact"  onclick="loadContact();">Contact</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        <div id="down-line-footer"></div>
      </div>

     <div id="extra-footer-fb" style="display:none;">
      <div class="fb-comments" data-href="http://parliament.ndmmx.com/" data-colorscheme="dark" data-numposts="5" data-width="The pixel width of the plugin"></div>
    </div>


<div id="social-hidden" style="display:none;">
 <div  id="social-buttons-hidden" class="entry">
  <h3>Social</h3>
    <ul>
      <li>
        <div id="fb-box" class="fb-like" data-href="https://www.facebook.com/parliamentchicago" data-width="The pixel width of the plugin" data-height="The pixel height of the plugin" data-colorscheme="light" data-layout="button_count" data-action="like" data-show-faces="false" data-send="false"></div>
      </li>
      <li>
        <a href="https://twitter.com/parliament_chi" class="twitter-follow-button" data-show-count="false" data-lang="en">Follow @parliament_chi</a>
      </li>
       <li class="twitterback">
        <a href="https://twitter.com/share" class="twitter-share-button" data-related="parliament_chi" data-lang="en" data-size="medium" data-count="horizontal">Tweet</a>
      </li>
    </ul>
  </div>
</div>

<!-- JavaScript 
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.js"></script>
    
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="js/jquery-ui.js"></script>

    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="js/fancybox/jquery.mousewheel-3.0.6.pack.js"></script>

    <!-- Add fancyBox -->
    <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js"></script>

    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="js/fancybox/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen" />
    <script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-buttons.js"></script>
    <script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-media.js"></script>

    <link rel="stylesheet" href="js/fancybox/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
    <script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-thumbs.js"></script>

    <script type="text/javascript" src="js/gallery/jquery.tmpl.min.js"></script>
    <script type="text/javascript" src="js/gallery/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/gallery/jquery.elastislide.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>