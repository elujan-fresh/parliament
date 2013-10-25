
 <?php
include('header.php');
?>

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
                   <li id="index-option"><a id="loadHome" href="#home">Home</a></li>
                      <li id="reservations-option" ><a href="#reservations" id="loadReservations">Reservations</a></li>
                      <li id="private-option"><a href="#private" id="loadPrivateParties">Private Events</a></li>
                      <li id="menu-option"><a href="#menu" id="loadMenu">Menu</a></li>
                      <li id="gallery-option"><a href="#gallery" id="loadGallery">Gallery</a></li>
                      <li id="about-option" ><a href="#about" id="loadAbout">About</a></li>
                      <li id="contact-option" class="active"><a href="#contact"  id="loadContact">Contact</a></li>
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

    <div id="contact-section">
    <div id="form-section">
      <section class="contact-form">
       <div class="subscribe-pitch">
        <h3>Parliament</h3>
        <p>324 West Chicago Ave. 
          <br> 
          Chicago IL 60654 
          <br> 
          <a class="mail" href="mailto:events@parliamentchicago.com?subject=Private Party Request from ParliamentChcago.com">events@parliamentchicago.com</a>
          <br> 
          Phone: 312.380.0004 <p>
      </div>
      <form action="MAILTO:cefuentes@narrowcastdigital.com" method="post" class="subscribe-form" enctype="text/plain">
        <select name="optionType" id="optionType" class="subscribe-input" >
                <option value="Opcion1">General Inquiries</option>
                <option value="Opcion2">Media Press</option>
                <option value="Opcion3">Lost & Found</option>
          </select>
          <input type="name" name="name" class="subscribe-input" placeholder="Name" autofocus>
          <br>
          <input type="email" name="email" class="subscribe-input" placeholder="Email address" autofocus>
          <br>
          <input type="subject" name="subject" class="subscribe-input" placeholder="Subject" autofocus>
          <br>
          <textarea name="comments" class="subscribe-input" placeholder="Comments"></textarea>
       <br>
         <button class="reservation-submit" type="submit"></button>
       </form>
       
    </section>
    </div>
    <div id="map-section">
        <a id="single_1" href="img/contact/big_map.jpg">
          <div id="map-image"></div>
        </a>
    </div>
  </div>
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
                      <li id="index-option-bottom"><a href="#home" id="loadIndexBottom">Home</a></li>
                      <li id="reservations-option-bottom"><a href="#reservations" id="loadReservationsBottom">Reservations</a></li>
                      <li id="private-option-bottom"><a href="#private" id="loadPrivatePartiesBottom">Private Events</a></li>
                      <li id="menu-option-bottom"><a href="#menu" id="loadMenuBottom">Menu</a></li>
                      <li id="gallery-option-bottom"><a href="#gallery" id="loadGalleryBottom">Gallery</a></li>
                      <li id="about-option-bottom" ><a href="#about" id="loadAboutBottom">About</a></li>
                      <li id="contact-option-bottom" class="active"><a href="#contact"  id="loadContactBottom">Contact</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        <div id="down-line-footer"></div>
      </div>
 <?php
include('footer.php');
?>
