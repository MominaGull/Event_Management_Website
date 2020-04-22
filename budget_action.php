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
                height: 60%;
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

    $name=$_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $event = $_POST['event'];
    $range = $_POST['range'];

            
            if(!preg_match("/^([a-zA-Z' ]+)$/", $name, $arr)){


                    header("Location: budget_friendly?error=nameinvalid");
                
                }else{
                    
                    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        header("Location: budget_friendly?error=emailinvalid");

                        
                    }else{
                        if(!preg_match('/^[0-9]*$/', $contact, $arr)){
                            header("Location: budget_friendly?error=contactinvalid");
                        
                        }
                        
                        else{
                            include_once 'dbh.inc.php';

                            $sql = "INSERT INTO budget(name,email,contact,event,range_of_event) VALUES ('$name','$email','$contact','$event','$range');";
                            if(mysqli_query($conn, $sql)){

                                
                                echo "<div id='order'>
                                        <h1>Your Order has been recorded! THANK YOU! </h1><br>
                                    Name: '$name'<br>
                                    Email: '$email'<br>
                                    Contact: '$contact'<br>
                                    Event: '$event'<br>
                                    Range: '$range'<br>
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
?>

