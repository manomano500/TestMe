

<?php
include "dbh.php";
include "funcs.php";


if(isset($_POST["submit"])){
    
    $username= $_POST["user"];
    $email=$_POST["eml"];
    $password=$_POST["pass"];
    $Rpassword=$_POST["Rpass"];
    $dubl= mysqli_query($link,"select * from users where usersUid='$username' or email='$email'");

    if(mysqli_num_rows($dubl)>0){
        
        
        echo '<script type="text/JavaScript"> 
           
        window.alert("Username or Email has Already Taken");
        window.history.back();

    </script>';
    }
    
    else{
        if($password == $Rpassword){
        $sql="insert into users values ('','$username','$email','$password')";
        mysqli_query($link,$sql);
       
        
        echo '<script type="text/JavaScript"> 
           
            window.alert("Succesful Signed Up Please Login");
            window.history.back();

        </script>';

    }
    else{
        echo '<script type="text/JavaScript"> 
           
        window.alert("Password Does Not mach");

    </script>';


    }
}
    
}

/* 
    if(emptyInputSignup( $email, $username, $pwd,$blb) !== false){
    header("location: ../contact.html?error=emptyinput");
    exit;

    }
         */
/* 
    if(uidexists($link, $username) !==false){
    header("location: ../contact.html?error=emptyemail");
    exit;
    }
 */
/* createUser($link,  $email, $username,$pwd);}
 */
/* else {
        header("location: ../contact.html");
        exit;
        }
    */