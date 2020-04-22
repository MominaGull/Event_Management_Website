<!DOCTYPE html>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="header.css">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> 

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <link rel="icon" href="favicon.ico">

        <title>Home</title>
        
        
    </head>

    <body style="background-color:  #ffeee6;">
        <div style='height:100px; background-color: #ffcccc'>
            <header class="nav" style="font-family: Josefin Sans;">
                <h1 style="font-size: 40px; color:#2f2d4e; ">Ivory Event Managers</h1>
                <ul class="menu">
                    <li><a href="index.php#cover" class="options" style="color: #ffffff">Home</a></li>
                    <li ><a href="About.php" class="options">About</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services</a>

                        <ul class="dropdown-menu">
                        <li><a href="wedding.php" class="dropdown-item">Weddings</a></li>
                        <li><a href="Birthday.php" class="dropdown-item">Birthdays</a></li>
                        <li><a href="shower.php" class="dropdown-item">Showers</a></li>
                        <li><a href="memorials.php"class="dropdown-item">Memorials</a></li>
                        <li><a href="ceremonies.php"class="dropdown-item">Ceremonies</a></li>
                        </ul>
                    </li>

                        <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Events</a>

                        <ul class="dropdown-menu">
                        <li><a href="design.php" class="dropdown-item">Customize Event</a></li>
                        <li><a href="Budget_friendly.php" class="dropdown-item">Budget Friendly</a></li>
                        </ul>
                    </li>


                        <li ><a href="index.php#contact" class="options">Contact</a></li>

                </ul>
        </header>
    </div>

        <div class="ls-wp-container" style="width:100%;height:645px;max-width:1920px;margin:0 auto;margin-bottom: 0px;"> 
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

    
    <div class="carousel-inner">
          <div class="item active">
            <img src="http://www.southernbelleevents.co.uk/wp-content/uploads/2017/07/southern-belle-wedding-dressing.jpg" alt="Image 3" alt="Image 1" style="width:100%; height:645px;">
          </div>

          <div class="item">
            <img src="https://gaynespark.co.uk/wp-content/uploads/2017/12/pink-flowers-wedding-ceremony-barn.jpg" alt="Image 2" style="width:100%; height:645px;">
          </div>
        
          <div class="item">
            <img src="https://assets.wallpapersin4k.org/uploads/2017/04/Wedding-Reception-Wallpaper-18.jpg" style="width:100%;height:645px;">
          </div>
    </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</div>

        <div class="cover" id="cover">
            <div class="content">
                <h1>Making your Events Memorable</h1>
                <p>Ivory Event Managers provides its customers with remarkable services 
                    which include events such as birthdays, weddings, convocations, ceremonies, and
                    services etc.
                </p>
                <a href="design.php"><button id="design-button" style="background-color: #7d6865;">Design Now</button></a>
                <a href="index.php#contact"><button id="contact-button" style="background-color: #7d6865;"><span class="fa fa-phone fa-2x" aria-hidden="true"></span>&nbsp;&nbsp;Contact Us</button></a>
            </div>
            <div id="slider">
                 <ul class="slides">
                    <li class="slide slide1"></li>
                    <li class="slide slide2"></li>
                    <li class="slide slide1"></li>
                    <li class="slide slide4"></li>
                    <li class="slide slide5"></li>

                    
                </ul>
            </div>
        </div>
           <center> <div class="contact" id="contact" >
    <div class="col-md-6 "  id="form_container">
        <h2><b>Contact Us<b></h2>
        <p>
           Please send your message below. We will get back to you at the earliest!
        </p>
        <form method="POST" action="feedback.php">

            <div class="row">
                <div class="col-sm-12 form-group">
                    <label for="message">
                        Message:</label>
                    <textarea class="form-control" type="textarea" id="message" name="message" maxlength="6000" rows="7" style="background: #ffeee6;"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label for="name">
                        Your Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required style="background: #ffeee6;">
                </div>
                <div class="col-sm-6 form-group">
                    <label for="email">
                        Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required style="background: #ffeee6;">
                </div>
            </div>



            <div class="row">
                <div class="col-sm-8 form-group">
                    <button type="submit" id = "value" value = "submit" class="btn btn-lg btn-default pull-right" style="background-color: #F1948A; border-color: #F1948A;">Send →</button>
                </div>
            </div>

        </form>
    </div>
</div>
</center>                   
    
        <div class="footer" style = "padding-top:100px;height:200px;width: 100%;">
            <div class="info1" style="width: 70%;">
             <h1>Ivory Event Managers</h1>
             <em>Giving you the best experience since '97</em>
            </div>

            <div class="info" style="width: 30%;">
             <h3 style="font-family: Josefin Sans;">CONTACT</h3>
                 <i class="fa fa-home" aria-hidden="true"></i>Islamabad<br>
                <i class="fa fa-phone fa-2x" aria-hidden="true"></i>(+92) 00000000<br>
                <i class="fa fa-envelope" aria-hidden="true"></i>ivory.events@gmail.com<br>
            </div>
        </div>

    </body>

    <script>
        $(function(){

            $(document).scroll(function(){

                $nav = $("header");
                $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());

                $menu = $(".options");
                $menu.toggleClass('scrolled2', $(this).scrollTop() > $nav.height());

                
            })

           
        })  

        $(function() {

                //settings for slider
                var width = 720;
                var animationSpeed = 1000;
                var pause = 3000;
                var currentSlide = 1;

                //cache DOM elements
                var $slider = $('#slider');
                var $slideContainer = $('.slides', $slider);
                var $slides = $('.slide', $slider);

                var interval;

                function startSlider() {
                    interval = setInterval(function() {
                        $slideContainer.animate({'margin-left': '-='+width}, animationSpeed, function() {
                            if (++currentSlide === $slides.length) {
                                currentSlide = 1;
                                $slideContainer.css('margin-left', 0);
                            }
                        });
                    }, pause);
                }
                function pauseSlider() {
                    clearInterval(interval);
                }

                $slideContainer
                    .on('mouseenter', pauseSlider)
                    .on('mouseleave', startSlider);

                startSlider();


            });
    </script>
</html>