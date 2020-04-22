<?php

if(isset($_POST['submit'])){

$message = $_POST['message'];
$name=$_POST['name'];
$email = $_POST['email'];  
        
        
        
        if(!preg_match("/^([a-zA-Z' ]+)$/", $name, $arr)){


                header("Location: index.php?error=nameinvalid");
            
            }else{
                
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    header("Location: index.php?error=emailinvalid");

                    
                }
                    
                    else{
                        include_once 'dbh.inc.php';
                        

                        if(empty($message))
                            $message = null;

                        echo "hello";
                        
                        $sql = "INSERT INTO user_feedback(name,email,message) VALUES ('$name','$email','$message');";
                        if(mysqli_query($conn, $sql)){

                            header("Location: index.php");

                        }
                        else{
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                        }
                       
                    }


                }
            }
     
?>