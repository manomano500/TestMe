<?php 

session_start();


include "inc/dbh.php";
include "inc/login.php";

        ?>
<!DOCTYPE html>
<html>
<head>
</head>
<link rel="stylesheet" href="public/css/welcome.css" />
<link rel="stylesheet" href="public/css/styles.css" />
<body>

<!---------------------------------------   navigation bar -->

<nav class="navbar">
    <div class="navbar__container">
    <!-- logo -->
    <div>
        <p class="circle-logo"><a href="" id="navbar__logo">Testme</a></p>
    </div>
    
    <!-- menu -->
   
   
<div class="dropdown">  
    
<button onclick="myFunctionmnu()" class="dropbtn popuplgn" id="">Menu</button>
<div id="myDropdown" class="dropdown-content">
 
    <a onclick="myFunction()" class="navbar__links"> About </a> 
    <a href="contact.php" class="navbar__links"> Contact Us</a>
   <a href="inc/logout.php" class=""  >Logout</a>
    
 


</div>

</div>

    <!-- navbar items : home, tech, sign up  
    <ul class="navbar__menu"></ul>
    <li class="navbar__item">
        <a onclick="myFunction()" class="navbar__links"> About </a>
    </li>
    <li class="navbar__item">
        <a href="contact.html" class="navbar__links"> Contact </a>
    </li>
    <li class="navbar__btn">
        <a href="inc/logout.php" class="button" id="popuplgn" >Logout</a>
      <button class="button2">=</button>
        <button class="button3">x</button>
    </li> -->
   <!--  <li  class="navbar__item">
        <button name="logout"  class="popuplgn"> Logout </button>
    --> 
</nav>

<!-- ------------------------------------------------- welcome  -->

<div class="welcom-page">
    <div class="background"></div>
    
   
        <div class="wcontainer">
    
        <div class="txt">
            <div class="welcome" id="welcom"> 
                <?php 
                if (isset($_SESSION['username'])){
                echo "Welcome "; echo $_SESSION['username'];
                
                }
                ?> 
            </div>
        
    
        
    </div>
    
    <div class="play-container">
        <div class="pcontainer"></div>
        <div class="play-button" id="pb"> 
            <div class="r-circle"></div>
            <div class="b-circle"></div>
            <img class="icon" src="img/icon.png" />
        </div>
    
    </div>
</div>

<!-- ------------------------------------------------- choose ur level  -->


<div class="level-rg">

    <div class="level-ps">
        <div class="easy" id="easy" onclick="document.getElementById('esypg').click();">
        <div class="ellipse-6"></div>

        <div class="easy2">Easy</div>
        </div>

        <a id="esypg" href="qz_easy.php" ></a>

        <div class="meduim" id="meduim">
        <div class="ellipse-6"></div>

        <div class="meduim2">Meduim</div>
        </div>

        <div class="hard" id="hard">
        <div class="ellipse-6"></div>

        <div class="hard2">Hard</div>
        </div>
    </div>
</div>




</body>

<script src="public/js/welcome.js"></script>
</html>

<?php 
