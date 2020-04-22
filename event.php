<html>
    <head>
        <title>Order</title>
        

        <style>
            #order {
                font-family: 'Josefin Sans';
                position: relative;
                color: #2f2d4e;
                font-size: 24px;
                border: 2px solid #2f2d4e;
                top: 100px;
                left: 34%;
                width: 30%;
                height: 70%;
                padding: 2%;
                line-height: 35px;
            }
            #order h1{
                color: #e32509;
                font-size: 30px;

            }
            header{
            background: #7672ad;
            top: -5px;
        }
        header a{
            color: white;
        }
        body{
            height: 100%;
           
        }
        </style>
    </head>
</html>
<?php

if(isset($_POST['submit'])){

    $category = $_POST['category'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $address = $_POST['address'];

    $number = $_POST['number'];
    $menu = $_POST['menu'];
    $decor = $_POST['decor'];
    
    $name=$_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    if(empty($category)){
        header("Location: design.php");

    }else{
        if(!empty($number)){
            if(!preg_match('/^[0-9]*$/', $number, $arr)){
                header("Location: design.php");
            }
        }    
            
            if(!preg_match("/^([a-zA-Z' ]+)$/", $name, $arr)){
                    header("Location: design.php");
                
                }else{
                    
                    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){   
                        header("Location: design.php");

                        
                    }else{
                        if(!preg_match('/^[0-9]*$/', $contact, $arr)){
                           
                            header("Location: design.php");
                        
                        }
                        
                        else{
                            include_once 'dbh.inc.php';

                            if(empty($number))
                                $number = 0;
                            if(empty($menu))
                                $menu = null;
                            if(empty($decor))
                                $decor = null;

                            $sql = "INSERT INTO userorder(category,date,time,address,number,menu,decor,name,email,contact) VALUES ('$category','$date','$time','$address',$number,'$menu','$decor','$name','$email','$contact');";
                            if(mysqli_query($conn, $sql)){

                                
                                echo "<div id='order'>
                                        <h1>Your Order has been recorded!</h1>
                                        <h1>Thank You</h1>
                                    Name: '$name'<br>
                                    Email: '$email'<br>
                                    Contact: '$contact'<br>
                                    Category: '$category'<br>
                                    Date: '$date'<br>
                                    Time: '$time'<br>
                                    Venue: '$address'<br>
                                    <a href='index.php'>GO BACK TO HOME PAGE</a>
                                    </div>
                                
                                ";
                            }
                            else{
                                echo "<div id='order'>
                                <h1>Error Placing your Order<br>Try Again.</h1>
                                </div>";
                            }
                           
                        }


                    }
                }
            
        }
        
    
    
}
?>

