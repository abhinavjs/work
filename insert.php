<?php
                
                session_start();
                
                
                require_once ("admin/connection.php");

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $customername = $_POST["customername"];

                    $email = $_POST["email"];

                    $phone = $_POST["phone"];

                    $guest = $_POST["guest"];

                    $date = $_POST["date"];

                    $time = $_POST["time"];

                    $message = $_POST["message"];
                    
                    

                    $insert = "INSERT INTO cafereservetb(customername,email,phone,guest,date,time,message)
                    VALUES('$customername','$email','$phone','$guest','$date','$time','$message')";

                    $query = mysqli_query($conn, $insert);

                    if ($query) {

                        $_SESSION["customername"] = $customername;
                        header("location:thankyou.php");
                    }
                    else{
                        echo"oops went wrong";
                    }
                }

                ?> 