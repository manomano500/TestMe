<?php
include "inc/dbh.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TestMe</title>
    <link rel="stylesheet" href="public/css/styles.css" />

</head>

<body class="bd">
    <!-- -------------------------------------   dark area  -->
    <div>
        <div class="darker"></div>
    </div>

    <p id="demo"></p>




    <!---------------------------------------   navigation bar -->
    <nav class="navbar">

        <div class="navbar__container">
            <!-- logo -->
    
            <div id="logo-container">
            <p class="circle-logo"> <a href="index.php" id="navbar__logo">Testme</a></p>

            </div>
            <div class="dropdown">
                <button onclick="myFunctionmnu()" class="dropbtn popuplgn" id="">Menu</button>
                <div id="myDropdown" class="dropdown-content">

                    <a class="navbar__links" id="popuplgn">Login </a>

                    <a onclick="myFunction()" class="navbar__links"> About </a>

                    <a href="contact.php" class="navbar__links"> Contact Us</a>




                </div>
            </div>
        </div>

    </nav>


    <!--------------------------------------- images -->
    <div class="cimg">
        <img src="img/girl_image.png" alt="girl_image" class="girl_image" />
        <div class="bcircle"></div>
    </div>

    <p class="p"><b>Test </b>& See Your Result</p>
    <div class="cimg">
        <img src="img/boy_image.png" alt="boy_image" class="boy_image" />
        <div class="rcircle"></div>
    </div>
    <br/>


    <!--------------------------------------- About us -->
    <table class="divy">
        <tr>
            <td colspan="2">
                <span class="About">About</span><span class="us">us</span><br /><br /><br />
                <div class="container_row">
                    <div class="layer1" id="content">
                        <span class="f">Our </span><span class="txt">Goal is to Create English Language Profiency <br />Tests That
                            Are Not only accurate, but also accessible, <br />easy to use,
                            and available at all times.
                        </span>
                    </div>
                    <div class="layer2">
                        <br />
                        <span class="f">Our</span><span class="txt2">
                            team : Mohamed Tekar , Fatima Alomrany , Mahjouba
                        </span>
                    </div>
                    <br /><br />
                </div>
            </td>
        </tr>

        <tr>
            <td class="point1">
                <div class="circl1"></div>
            </td>
            <td class="point2">
                <div class="circl2"></div>
            </td>
        </tr>
    </table>
    <br /><br /><br />

    <!--------------------------------------- strat button -->
    <table class="start">
        <tr>
            <td>
                Start <br />
                <span class="q">Quiz</span>
            </td>
        </tr>
    </table>
    <br /><br /><br />



    
    <!-- -------------------------------------   login  -->

    <div id="rg">


        <form action="inc/login.php" method="post">

            <p id="cls1" class="close" style="font-size:25px; font-weight: lighter;">x</p>

            <p>Log In</p>
            <br />


            <label for="eml">User Name: </label>
            <input name="user" class="Usrname rgin" type="text" id="value-input eml" placeholder="Please Enter Your User Name.." maxlength="30" autofocus required minlength="5" />

            <label for="passs">Password: </label>
            <input name="pass" class="rgin" id="passs" name="pass" type="password" placeholder="Please Enter Your password" required maxlength="15" minlength="5" />
            <input id="rmbr" style="display: inline-block" type="checkbox" />
            <label class="frgrmb" for="rmbr" style="display: inline">Remeber Me</label>


            <a style="font-size: small" href="#">Forget password?</a>


            <input name="submit" type="submit" class="signn" value="Login"><br>


            <label class="dont">Don't have an Account? </label>
            <a class="crtlnk" id="crtlnk" value="Signup" name="btn">Signup</a>
            <!--new account-->
        </form>

    </div>


    <!-- -------------------------------------   signup  -->
    <div id="rgn">


        <form action="inc/signup.php" method="post">
            <button id="cls2" class="close">x</button>

            <p>Signup</p>



            <label for="lname" autofocus>Username </label>
            <input name="user" class="rgin" id="lname" type="text" placeholder="Please Enter Username.." maxlength="10" required minlength="5" autofocus />



            <br />
            <hr />
            <br />
            <label for="eml">Email: </label>
            <input name="eml" class="rgin" id="eml" type="email" placeholder="Please Enter Your Email.." maxlength="30" required minlength="8" />

            <label for="pass">Password: </label>
            <input name="pass" class="rgin" id="pass" type="password" placeholder="Please Enter Your password" minlength="5" required maxlength="15" />

            <label for="pass">Reapet Password: </label>
            <input name="Rpass" class="rgin" id="Rpass" type="password" placeholder="Reapet Password" minlength="5" required maxlength="15" />

            <input id="rmbrr" style="display: inline-block" type="checkbox" />
            <label class="frgrmb" for="rmbrr" style="display: inline"><br>Remeber Me</label>

            <input name="submit" type="submit" class="signn" value="Signup">

            <label class="dont">Already Have an Account</label>
            <a class="crtlnk" id="lglnk">Login</a>
        </form>
    </div>



    <!--------------------------------------- footer -->
  


    <script src="public/js/t.js"></script>
   <?php include "inc/footer.html"?>
</body>

</html>
