
<!DOCTYPE html>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> 

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>   
        <link rel="icon" href="favicon.ico">
        <title>About Us</title>
        
</head>
<body>

	<div style='height:100px; background-color: #ffcccc'>
            <header class="nav" style="font-family: Josefin Sans;">
                <h1 style="font-size: 40px; color:#2f2d4e; ">Ivory Event Managers</h1>
                <ul class="menu">
                    <li><a href="index.php#cover" class="options">Home</a></li>
                    <li ><a href="About.php" class="options"  style="color: #ffffff">About</a></li>
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


	<div class="about" id="About">
            <div class="content">
                <h2>About Us</h2>
                <h1>Customer Satisfaction is <br> our priority</h1>
                <p>We have been serving in the city of Islamabad for over two decades now. We at Ivory
                    Event Managers believe that realising our customers' dream events is our only 
                    goal. We have worked with a lot of government and non-government associations and 
                    have conducted functions at very large scales too. Make sure you hit us up whenever you need
                    a reliable Event Planner.
                </p>
            </div>
            <div class="images">
                <div class="img1">
            
                <!--</div>
                <div class="img2">
                    
                </div>-->
            </div>
        </div>

        <div class="business" id="business">
            <h2>Business Profile</h2>
            <div class="social" id="social">
                <a href="" ><i class="icon fa fa-facebook fa-2x"></i> </a><br>
                <a href="" ><i class="icon fa fa-instagram fa-2x"></i> </a><br>
                <a href="" ><i class="icon fa fa-linkedin fa-2x"></i> </a>
            </div>
            <div class="box-container">
                <div class="box box1">
                    <h1><span>30%</span><br>Average</h1>
                    <p><strong>Increase in Sponsorship Revenue</strong></p>
                    <br>
                    <hr>
                    <br>
                    <div class="img1"></div>
                </div>
                <div class="box box2">
                    <h1><span>20%</span><br>Average</h1>
                    <p><strong>Increase in <br>Attendees</strong></p>
                    <br>
                    <hr>
                    <br>
                    <div class="img2"></div>

                </div>
                <div class="box box3">
                    <h1><span>28</span><br>Years</h1>
                    <p><strong>of Successful Experience</strong></p>
                    <br>
                    <hr>
                    <br>
                    <div class="img3"></div>

                </div>
                
            </div>
        </div>
    </div>
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
