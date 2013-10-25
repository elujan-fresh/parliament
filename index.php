
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
                   <li id="index-option" class="active"><a id="loadHome" href="#home">Home</a></li>
                      <li id="reservations-option" ><a href="#reservations" id="loadReservations">Reservations</a></li>
                      <li id="private-option"><a href="#private" id="loadPrivateParties">Private Events</a></li>
                      <li id="menu-option"><a href="#menu" id="loadMenu">Menu</a></li>
                      <li id="gallery-option"><a href="#gallery" id="loadGallery">Gallery</a></li>
                      <li id="about-option"><a href="#about" id="loadAbout">About</a></li>
                      <li id="contact-option"><a href="#contact"  id="loadContact">Contact</a></li>
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
<!-- CONTENT -->
    <div id="home-content">

            <!-- Carousel 1
            ================================================== -->
            <div id="myCarousel" class="carousel slide shadow">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
                <li data-target="#myCarousel" data-slide-to="6"></li>
                <li data-target="#myCarousel" data-slide-to="7"></li>
                <li data-target="#myCarousel" data-slide-to="8"></li>
              </ol>
              <div class="carousel-inner">
                <div class="item active">
                  <img src="img/venue/carousel_1.jpg" alt="1 slide">
                </div>
                <div class="item">
                  <img src="img/venue/carousel_2.jpg" alt="2 slide">
                </div>
                <div class="item">
                  <img src="img/venue/carousel_3.jpg" alt="2 slide">
                </div>
                <div class="item">
                  <img src="img/venue/carousel_4.jpg" alt="2 slide">
                </div>
                <div class="item">
                  <img src="img/venue/carousel_5.jpg" alt="2 slide">
                </div>
                <div class="item">
                  <img src="img/venue/carousel_6.jpg" alt="2 slide">
                </div>
                <div class="item">
                  <img src="img/venue/carousel_7.jpg" alt="2 slide">
                </div>
                <div class="item">
                  <img src="img/venue/carousel_8.jpg" alt="2 slide">
                </div>
                <div class="item">
                  <img src="img/venue/carousel_9.jpg" alt="2 slide">
                </div>
              </div>
              <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        <!-- /.carousel -->

        <!-- Carousel events

        ================================================== -->
       
             <div id="myCarousel2" class="carousel slide shadow">
              <!-- Indicators -->
              
              <ol class="carousel-indicators">
                <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel2" data-slide-to="1"></li>
                <li data-target="#myCarousel2" data-slide-to="2"></li>

              </ol>
              <div class="carousel-inner">
                <div class="item active">
                  <a class="various" href="#reservation-popup">
                    <img src="img/events/events_1.jpg" alt="1 slide">
                  </a>
                </div>
                <div class="item">
                  <a class="various" href="#reservation-popup">
                    <img src="img/events/events_2.jpg" alt="2 slide">
                  </a>            
                </div>
                <div class="item">
                  <a class="various" href="#reservation-popup">
                    <img src="img/events/events_3.jpg" alt="3 slide">
                  </a>            
                </div>
                
              </div>
              <a class="left carousel-control" href="#myCarousel2" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
              <a class="right carousel-control" href="#myCarousel2" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
              
            </div>
           
            <div  id="special-section">
              <ul>
                <li>
                    <div id="table-reservations">
                      <a class="various" href="#reservation-popup">
                        <img src="img/home/table_reservation.png"></img>
                        Table Reservations
                      </a>  
                    </div>
              </li>
                <li>
                    <div id="private-parties">
                      <a class="various" href="#social-hidden">
                        <img src="img/home/private_parties.png"></img>Social
                    </a>      
                    </div>
                  </a>  
                </li>
                 <li>
                    <div id="newsletter">  
                     <a class="various fancybox.ajax" href="newsletter.php">
                      <img src="img/home/newsletter.png"></img>Newsletter
                    </a>              
                    </div>
                  </a>  
                </li>
              </ul>
            </div>
       <!-- /.carousel -->



    </div>

  <div id="push"><!-- Leave this element empty --></div>

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
                      <li id="index-option-bottom" class="active"><a href="#home" id="loadIndexBottom">Home</a></li>
                      <li id="reservations-option-bottom"><a href="#reservations" id="loadReservationsBottom">Reservations</a></li>
                      <li id="private-option-bottom"><a href="#private" id="loadPrivatePartiesBottom">Private Events</a></li>
                      <li id="menu-option-bottom"><a href="#menu" id="loadMenuBottom">Menu</a></li>
                      <li id="gallery-option-bottom"><a href="#gallery" id="loadGalleryBottom">Gallery</a></li>
                      <li id="about-option-bottom"><a href="#about" id="loadAboutBottom">About</a></li>
                      <li id="contact-option-bottom"><a href="#contact"  id="loadContactBottom">Contact</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        <div id="down-line-footer"></div>
      </div>


<div class="entry" style="display:none;" id="reservation-popup">
  <h3>Please fill out the reservation form</h3>
    <div class="group">
          <form id="uvfrom" action="http://parliament.urvenue.com/apis/prores.pc8" method="post"  class="reservations-form" onsubmit="MM_validateForm('resdate','','R','firstname','','R','lastname','','R','email','','RisEmail','phone','','R');return document.MM_returnValue">
                <input type="hidden" name="venueid" value="704678929">
                <input type="hidden" name="restypeid" value="704678933">
                <input type="hidden" name="ettstate" value="1">
                <input type="hidden" name="sourceid" value="110458069">
                Date:
                <input name="resdate" type="text" id="datepicker" class="subscribe-input">
         <br>
          Arrival Time:
                <select name="starttime" id="starttime" class="subscribe-input" >
                  <option value="19:00">7:00pm</option>
                  <option value="19:30">7:30pm</option>
                  <option value="20:00">8:00pm</option>
                  <option value="20:30">8:30pm</option>
                  <option value="21:00" selected="">9:00pm</option>
                  <option value="21:30">9:30pm</option>
                  <option value="22:00">10:00pm</option>
                  <option value="22:30pm">10:30pm</option>
                  <option value="23:00pm">11:00pm</option>
                  <option value="23:30pm">11:30pm</option>
                  <option value="0:00">12:00am</option>
                  <option value="0:30">12:30am</option>
                </select>
                <br>
          First Name:
                <input type="text" class="subscribe-input"  name="firstname">
                Last Name:
                <input type="text" class="subscribe-input"  name="lastname">
                Email:
                <input type="text" class="subscribe-input"  name="email">
                Phone:
                <input type="text" class="subscribe-input"  name="phone">
          Quantity of Female Guests:
                <select name="pfemale" id="pfemale" class="subscribe-input" >
                  <option value="1" selected="">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                </select>
                <br>
                Quantity of Male Guests :
                <select name="pmale" id="pmale" class="subscribe-input" >
                  <option value="1" selected="">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                </select>
                <br>
                Special Instructions or Requests:
                <textarea name="instructions" class="subscribe-input" ></textarea>
                <br>
                <button class="reservation-submit" type="submit"></button>
                </form>

    </div>
  </div>


 <?php
include('footer.php');
?>

     
