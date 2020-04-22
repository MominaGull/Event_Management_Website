<!DOCTYPE html>
<html>
    <head>
        <title>Services</title>
       
        <link rel="stylesheet" href="servicestyle.css">
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> 

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>   
        <link rel="icon" href="favicon.ico">
        <style>
        
        section{
            position: relative;
            top: 80px;
        }
        #serviceoption{
            color:#e32509;
        }
        </style>
    </head>
    <body>

        <div style='height:100px; background-color: #ffcccc'>
            <header class="nav" style="font-family: Josefin Sans;">
                <h1 style="font-size: 40px; color:#2f2d4e; ">Ivory Event Managers</h1>
                <ul class="menu">
                    <li><a href="index.php#cover" class="options">Home</a></li>
                    <li ><a href="About.php" class="options">About</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="color: #ffffff;">Services</a>

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



        <section>
        <div class="title">
           <hr id="hr1"> <h1>SERVICES</h1><hr id="hr2">
        </div>
        <div class="about showers" id="showers" style="top: 150px">
                <div class="about memorial" id="memorial" style="top: -200px">
                <div class="content" style="left: 5%;">
                    <h2>Memorials<hr style="left: -80px"></h2>
                    <h1>We pray for <br> your loved ones</h1>
                    <p>It's hard to bid farewell to your loved ones but worry not for we are there 
                        to part your loved ones without any disturbances. We offer funeral/memorial services
                        so that you do not have to worry about anything in such hard times.
                    </p>
                </div>
                <div class="wedimg memimg" style="left:50%">
                    <div class="img1">
                
                    </div>
                </div>
            </div>
        </section>
        <div class="footer" style = "width: 100%;background-color:#ffeee6;">
            <div class="info1" style="width: 70%;height:250px;background-color:#ffeee6;">
             <h1>Ivory Event Managers</h1>
             <em>Giving you the best experience since '97</em>
            </div>

            <div class="info" style="width: 30%;height:250px;background-color:#ffeee6;">
             <h3 style="font-family: Josefin Sans;">CONTACT</h3>
                 <i class="fa fa-home" aria-hidden="true"></i>Islamabad<br>
                <i class="fa fa-phone fa-2x" aria-hidden="true"></i>(+92) 00000000<br>
                <i class="fa fa-envelope" aria-hidden="true"></i>ivory.events@gmail.com<br>
            </div>
        </div>
        <script>
        $(function(){

            $(document).scroll(function(){

                $nav = $("header");
                $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());

                $menu = $(".options");
                $menu.toggleClass('scrolled2', $(this).scrollTop() > $nav.height());

                
            })

           
        }) </script>
    </body>
    </html>
