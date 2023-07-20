
<!-- this file is not being used
 -->

<?php
 include "dbh.php";
function emptyInputSignup($name, $email, $username, $pwd){

    $result=null;
    if (empty($name) || empty($email) || empty($username) || empty($pwd) ){
        $result=true;
    }
    else{
        $result=false;
    }

    return $result;

}

function lgnuser($link, $username,$password){
    echo "ffnc";
    $sql="select * from users where usersUid= '$username' and usersPd= '$password'";

    echo "coun";
    $result= mysqli_query($link, $sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $coun=(mysqli_num_rows($result)); 
    

    if($coun==1){
        
        header("Location: welcom.php "); 
   
   }
   else{
   
       echo "no user";
       
   }
   
    
    
     
     if (empty($username) || empty($password)) {
        header("location: ../contact.html?error=emptyemail");
   /*  }
    else{
        $result=false;
    }

    return $result; */
}

/* lgnuser($link,"jouba","12345"); */


}