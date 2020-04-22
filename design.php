<!DOCTYPE html>
<html>
    <head>
        <title>Design</title>
        
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> 

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>   
        <link rel="icon" href="favicon.ico">
        <style>
.title{
    font-family: 'Josefin Sans';
    color: #e32509;
    text-align: center;
    position: relative;
    right: 10px;    
}

.design-form h1{
    margin-bottom: 45px;

}

        .design-form{

            padding: 2%;
            font-family: 'Josefin Sans';
            color: black;
            font-size: 20px;
            width: 40%;
            height: 500px;
            border-radius: 15px;
            position: relative;
            left: 28.5%;
            z-index: 12;
            top: 110px;
            
}
.design-form h1{
    margin-bottom: 45px;

}
      section{
        margin-top: -100px;
      }
        section h1{
            color:  #800033;
        }
        #designoption{
            color:  #800033;

        }

        

select{
    height: 35px;
    width: 50%;
    border: none;
    transition: all 0.2s;
    padding: 1%;
    font-family: 'Josefin Sans';
    color: #800033;
    font-size: 18px;
    margin-bottom: 5px;
    position: relative;
    right: 6px;
}
select:hover{
    border: 2px solid #e32509;
}
select:focus{
    border: 2px solid #e32509;
    outline: none;
}
select option{
    font-family: 'Josefin Sans';
    color: #800033;
    font-size: 18px;
    
}
select option:hover{
    background: #e32509;

}
input{
    width: 40%;
    height: 30px;
}

textarea:hover, input:hover{
    border: 2px solid #e32509;
}
textarea:focus,input:focus{
    border: 2px solid #e32509;
    outline: none;
}
button{
    background: #800033;
    width: 350px;
    height: 50px;
    border-radius: 5%;
    border: #e32509;
    position: relative;
    top: 40px;
    left: 18%;
    font-family: 'Roboto';
    color: white;
    font-size: 15px;
    font-weight: 900;
    transition: all 0.5s;
}
button:hover{
    background-color: #ff0000;
    cursor: pointer;
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
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"  style="color: #ffffff;">Events</a>

                        <ul class="dropdown-menu">
                        <li><a href="design.php" class="dropdown-item">Customize Event</a></li>
                        <li><a href="Budget_friendly.php" class="dropdown-item">Budget Friendly</a></li>
                        </ul>
                    </li>


                        <li ><a href="index.php#contact" class="options">Contact</a></li>

                </ul>
        </header>
    </div>

        <div class="title">
          <h1 style="color:  #800033;">CUSTOMISE YOUR EVENT</h1>
        </div>
        <div class="design-form" style = "padding-bottom: 2000px;">
        <section>
                <h1 id="section">Event  Details</h1>
            <form method="POST" action="event.php">
                    <p>Event Category</p>
                    <Select name="category" required>
                        <option selected disabled>Choose a Category</option>
                        <option>Birthday</option>
                        <option>Wedding</option>
                        <option>Shower</option>
                        <option>Memorial Service</option>
                        <option>Other</option>
                    </Select>
                    <hr>
                    <p>Select Date</p>
                    <input name="date" id="date" value="yy-dd-mm" type="date" max="2019-08-31" min="" required>
                    <hr>
                    <p>Select Time</p>
                    <input type="time" id="time" name="time" required>
                    <hr>
                    <p>Enter Venue Address</p>
                    <input type="text" name="address" id="address" placeholder="Enter Address" required>
            </section>
            
            <section>
                <h1 id="section" style = "padding-top: 100px;">Food & Decor</h1>
           
                    <p>Number of People</p>
                    <input name="number" id="number" name="number">
                    <hr>
                    <p>Enter Menu</p>
                    <textarea id="menu" name="menu" rows="10" cols="70"></textarea>
                    <hr>
                    <p>Theme/Decor</p>
                    <textarea id="menu" name="decor" rows="10" cols="70"></textarea>

            </section>
          
            <section>
                <h1 id="section" style = "padding-top: 100px;">Customer Details</h1>
           
                    <p>Enter Name</p>
                    <input type="text" name="name" id="number"  placeholder="Enter Name" required>
                    <hr>

                    <p>Enter Email</p>
                    <input type="text" name="email" id="number"  placeholder="Enter E-mail" required>
                    <hr>

                    <p>Enter Contact Number</p>
                    <input type="text" name="contact" id="number" placeholder="Enter Number" required>
                    
              
                 </section>
                  <button type="submit" id="next" name="submit" >Submit</button>
           </form>
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