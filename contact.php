<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>TestMe</title>
<link rel="stylesheet" href="public/css/styles.css" />
</head>


<body>
<!---------------------------------------   navigation bar -->
<nav class="navbar">

    <div class="navbar__container">
        <!-- logo -->
        
        <div id="logo-container">
            <p class="circle-logo"> <a href="index.php" id="navbar__logo">Testme</a></p>

        </div>
        <button class="dropbtn popuplgn" id="popuplgn" onclick=window.history.back();> Back </button>
        
    </div>
    
    


   

 
</nav>


<!--------------------------------------- Contact us -->

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {
    box-sizing: border-box;
}
/* #popuplgn{
margin-top: 25px ;
  font-size: 15px;
  display: flex;
  justify-content: center;
  align-items: center;
  text-decoration: none;
  padding: 10px 30px;
  height: 50%;
  width: fit-content;
  border: none;
  outline: none;
  border-radius: 20px;
  background: #ff3131;
  color: #fff;
  transition: all 0.4s ease-in-out;
  cursor: pointer;
} */

input[type=text], select, textarea {
width: 100%;
padding: 12px;
border: 1px solid #f2f2f2;
border-radius: 4px;
box-sizing: border-box;
margin-top: 6px;
margin-bottom: 16px;
resize: vertical;
}

input[type=submit] {
background-color: #0e2c4b;
color: white;
padding: 12px 10px;
width: 200px;
border: none;
border-radius: 40px;
cursor: pointer;
transition: all 0.4s ease-in-out;
}

input[type=submit]:hover {
background-color: #ff3131;
}

.container {
margin: 0 auto;
width: 600px;
border-radius: 40px;
background-color: #f2f2f2;
padding: 20px;
}

hr{
    border: 1.5px solid white;
    opacity: 0.9;
}




</style>


<br><br>
<div class="container">
   
<form ><br>
<label for="fname">Email</label>
<input type="text" id="eml" name="eml" placeholder="Please Enter Your Email..">



<label for="subject">Subject</label>
<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

<input type="submit" value="Submit">
</form>
</div>
<br><br>


 <!-- <div class="footer-contianer"> -->
 <div class="footer">
      <div>
        <span class="right">
            <br />
            Mohamed <br />
            Fatima <br />
            Jouba
        </span>
        <span class="left"> TestMe © <br /></span>
        <span class="under"> All rights reserved.</span>
        </div>
    </div>  
 

<script src="public/js/t.js"></script>
</body>
</html>
