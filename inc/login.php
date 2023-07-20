<?php

include "dbh.php";



    if (isset($_POST["submit"])) {
        $stmt= 

        $userName = $_POST["user"];
        $password = $_POST["pass"];
        
        $sql ="select * from users where usersUid= '$userName' or email = '$userName' ; ";

        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_assoc($result);
        $coun = (mysqli_num_rows($result));
            
    

        if($coun ==1) {
            if(password_verify($password,$row['usersPd'])){
                session_start();
                $_SESSION['username'] = $row['usersUid'];
                header("Location: ../welcom.php ");
                exit();
            } 
            
            else{
                echo '<script type="text/JavaScript"> 
            
            window.alert("Invailed Username or Password ");
            
            window.history.back()

            </script>';
            }
        }
        
        else {
           
            
            echo '<script type="text/JavaScript"> 
            
            window.alert("Invailed Username or Password ");
            
            window.history.back()

            </script>'; 

        }
        
   

    }
        
   

   
    


  
