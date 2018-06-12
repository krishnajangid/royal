<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Smooth Scrollable -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>




<!-- Navbar (sit on top) -->
<style type="text/css">
body,h1,h2,h3,h4,h5,h6,a,li{font-family: "Raleway", sans-serif}
body {
  height: 100%;
  line-height: 1.8;
}

.css_fade {

  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
.psw {

  padding-top: 16px;
  padding-left: 116px;
}
footer{
  background-color:black;
  padding:15px;
  margin-top:15px;
  color: white;
}
footer.a{
  text-decoration: none;
  color: white;
}
</style>


<nav class="navbar  navbar-fixed-top navbar-inverse " >
  <div class="container-fluid ">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#main_home">Royal</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav ">
        <li class=""><a href="#home" ><i class="fa fa-home"></i> HOME</a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1</a></li>
            <li><a href="#">Page 2</a></li>
            <li><a href="#">Page 3</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Page 4</a></li>
            <li><a href="#">Page 5</a></li>
          </ul>
        </li>
        <li ><a href="#about" >ABOUT</a></li>
        <li><a href="#contact"><i class="fa fa-envelope"></i> CONTACT</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li> <a  data-toggle="modal" data-target="#mod"> <span class="glyphicon glyphicon-user"> </span> Log In</a> </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div><!--/.container-fluid -->
</nav>
<!-- End of Nev-bar -->


<!-- Automatic Slide SHow -->

<div class="carousel slide" id="car1" data-ride="carousel">
  <ol class="carousel-indicators" >
    <li data-target="#car1" data-slide-to="0" class="active"></li>
    <li data-target="#car1" data-slide-to="1"></li>
    <li data-target="#car1" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner" id="main_home">
    <div class="item active">
      <img src="img/apple2.jpg" alt="Hp" class="header" width="100%" height="100%"style="margin-top:58px;" />
    </div>
    <div class="item">
     <img src="img/hp.jpg" alt="Hp" class="header" width="100%" height="100%"style="margin-top:58px;" />
   </div>
   <div class="item">
    <img src="img/samsung.jpg" alt="Hp" class="header" width="100%" height="100%"style="margin-top:58px;" />
  </div>

</div>
<a class="left carousel-control " href="#car1" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left"></span>
</a>
<a class="right carousel-control " href="#car1" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right"></span>
</a>
</div>
<!-- END OF AUTOMATIC SLIDE SHOW -->


<!-- Login form -->
<div id="mod" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" data-dismiss="modal">X</button>
        <center>  <img src="img/login.png" alt="Avatar" class="avatar"></center>

        <div class="modal-body">
          <form>
           <label for="uname"><b>Username</b></label>
           <input type="Email" class="form-control" placeholder="Enter Username" name="uname" required>

           <label for="psw"><b>Password</b></label>
           <input type="password"class="form-control" placeholder="Enter Password" name="psw" required>
           <br>
           <button type="submit" class="btn btn-success btn-block">Sign in</button>

           <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
          <br>
          <button type="button" class="btn btn-danger " data-dismiss="modal">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>




<!-- About Section -->

<div class="container" >
  <div id="home"> </div>
  <br></br>
  <b><h1>Home</h1></b>
  <div class="jumbotron">
    <h3><p>
      Pinnacle Infotech established in the year 2000 draws it’s brand value from seventeen years of experience in creating and maintaining strong customer relationships, proven aptitude to provide ultramodern technology to its clientele along with exceptional service & support back-up and Infrastructure facility.
    </p><br><p>
      Pinnacle holds the distinction of having multi skilled technical professionals aiming to reduce the IT downtime thus contributing towards better IT returns alongside significant business results for its clients.

      We are preferred and quality vendors for a variety of branded products such as personal & desktop computers, notebook & laptops, servers, printers, scanners and other computer peripherals. Pinnacle is an authorized re-sellers for Norton Antivirus (security solutions), Microsoft software products (operating systems, MS office suites, server solutions, security solutions.etc.) and APC power management and solutions.
    </p><br><p>
      Optimum-Return-on-IT Investment and Best-Value-for-Money to our clients are foundation on which our business runs today. Integrating IT with Business for excellent business results is the key for modern day business. This applies to all the businesses regardless of the scale, size and geography. We are the pioneers providing IT solutions to range of segments like Corporate, Small & Medium Business, Small Office and Homes.<br></br>
    </p></h3>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <img src="img/apple2.jpg" alt="apple2"   height="200">
        <div class="caption">
          <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
        </div><a href="#" class="btn btn-success">Know More</a>
      </div>
    </div>
    <div class="col-md-4">
     <div class="thumbnail">
      <img src="img/hp.jpg" alt="apple2"   height="200" >
      <div class="caption">
        <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
      </div><a href="#" class="btn btn-success">Know More</a>
    </div>
  </div>
  <div class="col-md-4">
   <div class="thumbnail">
    <img src="img/samsung.jpg" alt="apple2"   height="200">
    <div class="caption">
      <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
    </div><a href="#" class="btn btn-success">Know More</a>
  </div>
</div>
</div>
</div>
</div>

<!-- ABout Page staret Here -->
<div class="container" >
  <div id="about" ></div>
  <br></br>  <br></br>
  <h3 >ABOUT THE COMPANY</h3>
  <div class="jumbotron">

  </div>
</div>

<!-- End Of About Page -->

  <!-- Team -->

      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="">
              <h4>Kay Garland</h4>
              <p class="text-muted">Lead Designer</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img//apple2.jpg" alt="">
              <h4>Larry Parker</h4>
              <p class="text-muted">Lead Marketer</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/3.jpg" alt="">
              <h4>Diana Pertersen</h4>
              <p class="text-muted">Lead Developer</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
          </div>
        </div>
      </div>
    </section>


<!-- Promo Section - "We know design" -->
<div class="container light-grey" style="padding:128px 16px">
  <div class="row-padding">
    <div class="col m6">
      <h3>We know design.</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore.</p>
      <p><a href="#work" class="button black"><i class="fa fa-th"> </i> View Our Works</a></p>
    </div>
    <div class="col m6">
      <img class="image round-large" src="img/phone_buildings.jpg" alt="Buildings" width="700" height="394">
    </div>
  </div>
</div>

<!-- Team Section -->
<div class="container" style="padding:128px 16px" id="team">
  <h3 class="center">THE TEAM</h3>
  <p class="center large">The ones who runs this company</p>
  <div class="row-padding grayscale" style="margin-top:64px">
    <div class="col l3 m6 margin-bottom">
      <div class="card">
        <img src="/w3images/team2.jpg" alt="John" style="width:100%">
        <div class="container">
          <h3>John Doe</h3>
          <p class="opacity">CEO & Founder</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="button light-grey block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="col l3 m6 margin-bottom">
      <div class="card">
        <img src="/w3images/team1.jpg" alt="Jane" style="width:100%">
        <div class="container">
          <h3>Anja Doe</h3>
          <p class="opacity">Art Director</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="button light-grey block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="col l3 m6 margin-bottom">
      <div class="card">
        <img src="/w3images/team3.jpg" alt="Mike" style="width:100%">
        <div class="container">
          <h3>Mike Ross</h3>
          <p class="opacity">Web Designer</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="button light-grey block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="col l3 m6 margin-bottom">
      <div class="card">
        <img src="/w3images/team4.jpg" alt="Dan" style="width:100%">
        <div class="container">
          <h3>Dan Star</h3>
          <p class="opacity">Designer</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="button light-grey block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Promo Section "Statistics" -->
<div class="container row center dark-grey padding-64">
  <div class="quarter">
    <span class="xxlarge">14+</span>
    <br>Partners
  </div>
  <div class="quarter">
    <span class="xxlarge">55+</span>
    <br>Projects Done
  </div>
  <div class="quarter">
    <span class="xxlarge">89+</span>
    <br>Happy Clients
  </div>
  <div class="quarter">
    <span class="xxlarge">150+</span>
    <br>Meetings
  </div>
</div>

<!-- Work Section -->
<div class="container" style="padding:128px 16px" id="work">
  <h3 class="center">OUR WORK</h3>
  <p class="center large">What we've done for people</p>

  <div class="row-padding" style="margin-top:64px">
    <div class="col l3 m6">
      <img src="/w3images/tech_mic.jpg" style="width:100%" onclick="onClick(this)" class="hover-opacity" alt="A microphone">
    </div>
    <div class="col l3 m6">
      <img src="/w3images/tech_phone.jpg" style="width:100%" onclick="onClick(this)" class="hover-opacity" alt="A phone">
    </div>
    <div class="col l3 m6">
      <img src="/w3images/tech_drone.jpg" style="width:100%" onclick="onClick(this)" class="hover-opacity" alt="A drone">
    </div>
    <div class="col l3 m6">
      <img src="/w3images/tech_sound.jpg" style="width:100%" onclick="onClick(this)" class="hover-opacity" alt="Soundbox">
    </div>
  </div>

  <div class="row-padding section">
    <div class="col l3 m6">
      <img src="/w3images/tech_tablet.jpg" style="width:100%" onclick="onClick(this)" class="hover-opacity" alt="A tablet">
    </div>
    <div class="col l3 m6">
      <img src="/w3images/tech_camera.jpg" style="width:100%" onclick="onClick(this)" class="hover-opacity" alt="A camera">
    </div>
    <div class="col l3 m6">
      <img src="/w3images/tech_typewriter.jpg" style="width:100%" onclick="onClick(this)" class="hover-opacity" alt="A typewriter">
    </div>
    <div class="col l3 m6">
      <img src="/w3images/tech_tableturner.jpg" style="width:100%" onclick="onClick(this)" class="hover-opacity" alt="A tableturner">
    </div>
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="modal black" onclick="this.style.display='none'">
  <span class="button xxlarge black padding-large display-topright" title="Close Modal Image">×</span>
  <div class="modal-content animate-zoom center transparent padding-64">
    <img id="img01" class="image">
    <p id="caption" class="opacity large"></p>
  </div>
</div>

<!-- Skills Section -->
<div class="container light-grey padding-64">
  <div class="row-padding">
    <div class="col m6">
      <h3>Our Skills.</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
      tempor incididunt ut labore et dolore.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
      tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="col m6">
      <p class="wide"><i class="fa fa-camera margin-right"></i>Photography</p>
      <div class="grey">
        <div class="container dark-grey center" style="width:90%">90%</div>
      </div>
      <p class="wide"><i class="fa fa-desktop margin-right"></i>Web Design</p>
      <div class="grey">
        <div class="container dark-grey center" style="width:85%">85%</div>
      </div>
      <p class="wide"><i class="fa fa-photo margin-right"></i>Photoshop</p>
      <div class="grey">
        <div class="container dark-grey center" style="width:75%">75%</div>
      </div>
    </div>
  </div>
</div>

<!-- Pricing Section -->
<div class="container center dark-grey" style="padding:128px 16px" id="pricing">
  <h3>PRICING</h3>
  <p class="large">Choose a pricing plan that fits your needs.</p>
  <div class="row-padding" style="margin-top:64px">
    <div class="third section">
      <ul class="ul white hover-shadow">
        <li class="black xlarge padding-32">Basic</li>
        <li class="padding-16"><b>10GB</b> Storage</li>
        <li class="padding-16"><b>10</b> Emails</li>
        <li class="padding-16"><b>10</b> Domains</li>
        <li class="padding-16"><b>Endless</b> Support</li>
        <li class="padding-16">
          <h2 class="wide">$ 10</h2>
          <span class="opacity">per month</span>
        </li>
        <li class="light-grey padding-24">
          <button class="button black padding-large">Sign Up</button>
        </li>
      </ul>
    </div>
    <div class="third">
      <ul class="ul white hover-shadow">
        <li class="red xlarge padding-48">Pro</li>
        <li class="padding-16"><b>25GB</b> Storage</li>
        <li class="padding-16"><b>25</b> Emails</li>
        <li class="padding-16"><b>25</b> Domains</li>
        <li class="padding-16"><b>Endless</b> Support</li>
        <li class="padding-16">
          <h2 class="wide">$ 25</h2>
          <span class="opacity">per month</span>
        </li>
        <li class="light-grey padding-24">
          <button class="button black padding-large">Sign Up</button>
        </li>
      </ul>
    </div>
    <div class="third section">
      <ul class="ul white hover-shadow">
        <li class="black xlarge padding-32">Premium</li>
        <li class="padding-16"><b>50GB</b> Storage</li>
        <li class="padding-16"><b>50</b> Emails</li>
        <li class="padding-16"><b>50</b> Domains</li>
        <li class="padding-16"><b>Endless</b> Support</li>
        <li class="padding-16">
          <h2 class="wide">$ 50</h2>
          <span class="opacity">per month</span>
        </li>
        <li class="light-grey padding-24">
          <button class="button black padding-large">Sign Up</button>
        </li>
      </ul>
    </div>
  </div>
</div>

<!-- Contact Section -->
<div class="container " >

  <h3 style="padding:75px 16px" id="contact">CONTACT</h3>
  <div class="jumbotron">
    <div class="row">
      <div class="col-md-5">
        <p><i class="fa fa-map-marker fa-fw xxlarge margin-right"></i> Bhatkal, Karnatka</p>
        <p><i class="fa fa-phone fa-fw xxlarge margin-right"></i>Call <a href="tel:9900962167"> 9900962167</a></p>

        <p><i class="fa fa-envelope fa-fw xxlarge margin-right"> </i> Email:<a href="mailto:krish@gmail.com"> Krishna@gmail.com</a></p>
        <br></br>
        <form action="/action_page.php" target="_blank">
          <p><input class="form-control" type="text" placeholder="Name" required name="Name"></p>
          <p><input class="form-control" type="text" placeholder="Email" required name="Email"></p>
          <p><input class="form-control" type="text" placeholder="Subject" required name="Subject"></p>
          <p><input class="form-control" type="text" placeholder="Message" required name="Message"></p>
          <p>
            <button class="btn " type="submit" style="background-color: black; color: white;" >
              <i class="fa fa-paper-plane"></i> SEND MESSAGE
            </button>
          </p>
        </form>
      </div>

      <div class="col-md-5">

        <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d813.8549848309156!2d74.55025929806868!3d13.996147646671115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3bbc42e110f760a1%3A0x5fd0e094251f5e02!2sRoyal+Electricals%2C+damda+residency%2C+sagar+road%2C+near+shamshuddin+circle%2C+Belalkanda%2C+Bhatkal%2C+Karnataka+581320!3m2!1d13.9964096!2d74.5501901!5e0!3m2!1sen!2sin!4v1528643206541" width="600" height="530" frameborder="0" style="border:1" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>
</div>


<!-- Footer -->
<footer class=" navbar-inverse">

  <div class="row">
   <div class="col-md-2">

    <!-- Links -->
    <h3 class="font-weight-bold text-uppercase" style="color: white" >Information</h3>

    <ul class="list-unstyled" style="color: #a3a1a1;">
      <li>
       <span class="glyphicon glyphicon-arrow-right"> </span> <a href="#home" style="color: #a3a1a1;;">Home</a>
     </li>
     <li>
       <span class="glyphicon glyphicon-arrow-right"> </span> <a href="#about" style="color: #a3a1a1;">About</a>
     </li>
     <li>
       <span class="glyphicon glyphicon-arrow-right"> </span> <a href="#contact" style="color: #a3a1a1;">Contact</a>
     </li>

   </ul>

 </div>


 <div class="col-md-8">
  <br>
  <ul class="list-unstyled list-inline text-center">
   <p align=""><a href="#main_home" class="btn btn-info"><i class="fa fa-arrow-up margin-right"></i>To the top</a></p>
   <br>
   <h4>Follow Us</h4>

   <li class="list-inline-item">
     <a target="_blank" href="http://www.facebook.com">
      <button  class="btn btn-default" style="background-color: #4286f4; color: white;border-radius: 100px"><span class="fa fa-facebook"  ></span> </button>
    </a>
  </li>
  <li class="list-inline-item">
    <a target="_blank" href="http://www.twitter.com">
      <button  class="btn btn-default" style="background-color: #55acee; color: white;border-radius: 100px"><span class="fa fa-twitter"  ></span> </button>
    </a>
  </li>
  <li class="list-inline-item">
    <a target="_blank" href="http://www.twitter.com">
      <button  class="btn btn-default" style="background-color:#dd4b39; color: white;border-radius: 100px"><span class="fa fa-google-plus"  ></span> </button>
    </a>
  </li>
  <li class="list-inline-item">
    <a target="_blank" href="http://www.twitter.com">
      <button  class="btn btn-default" style="background-color: #0073b2; color: white;border-radius: 100px"><span class="fa fa-linkedin"  ></span> </button>
    </a>

  </ul>
</div>
</div>
<hr>


<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2018 Copyright:
  Krishna Jangid
  <br>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->


<!-- Smooth Scrollabe Script -->
<script type="text/javascript">
   // Select all links with hashes
   $('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
      ) {
      // Figure out element to scroll to
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
</script>