
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="public/css/easy_css.css">
        
    </head>

<body>

    <nav class="navbar">

    <div class="navbar__container">
        <!-- logo -->
        
        <div id="logo-container">
            <p class="circle-logo"> <a href="index.php" id="navbar__logo">Testme</a></p>

        </div>
        <button class="dropbtn popuplgn" id="popuplgn" onclick=window.history.back();> Back </button>
        
    </div>
 
 
</nav>



    <table id ="trc">
        <tr>
            <td><div class = "rcircle" ></div></td>
        </tr>
    </table>

    <br><br><br>



    <br><br>
    <form method="POST">
        <input type="hidden" name="counter" value="<?php echo $_SESSION['counter']; ?>" />
        <table class = "table_btn" >
            <tr>
            <td><input type="submit" name="button" value="Next" class="next2"/></td>
            <td class = "sp1" ></td>
            <td class = "score">score</td>
            <td ><div class = "score_value">0</div></td>
            <td class = "sp2" ></td>
            <td> <input type="submit" name="reset" value="Retry" class="retry" /></td>
        </tr>
        </table>
    <!-- <br/><p class = "sc"></p> -->
    </form>

</body>

<!---------------------------------------------------------------------- js -->

<script src="public/js/easy_js.js"></script>
</html>



<?php 
include "inc/dbh.php";
include "inc/login.php";
session_start();


// if counter is not set, set to zero
if(!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 1;
}

// if button is pressed, increment counter
if(isset($_POST['button'])) {
    if ($_SESSION['counter'] < 4){
    ++$_SESSION['counter'];
    }
}    

// reset counter
if(isset($_POST['reset'])) {
    $_SESSION['counter'] = 1;
}

// -------------------------------------------------------------------- sql

$sql = "SELECT id, question, op1 , op2 , op3 , correct FROM Easy WHERE id = " .  $_SESSION['counter'] ;
$result = mysqli_query($link, $sql);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        // echo "<p>"  .  $row["question"] . "<br>" . $row["op1"] . $row["op2"] . $row["op3"] ."</p>";
        echo "<br><br><br>" ."<h2 class = 'qdb' >".$row["id"] .") ".$row["question"]."</h2>"
        ."<span class = 'result' >"."</span>"."<br>".
        "<input type='radio' name='op' class = 'r' >" . "<label class = 'rd' >". $row["op1"] ."</label>"."<br>"."<br>".
        "<input type='radio' name='op' class = 'r' >" . "<label class = 'rd' >". $row["op2"] ."</label>"."<br>"."<br>".
        "<input type='radio' name='op' class = 'r' >" . "<label class = 'rd' >". $row["op3"] ."</label>"."<br>"."<br>".
        
        "<label class = 'cr' style= 'visibility: hidden;' >". $row["correct"]  ."</label>".
        "<label class = 'cc' style= 'visibility: hidden;' >". $_SESSION['counter']  ."</label>".
        '<br><br><br>';
    }
}



?>

<?php 
echo '<br><pre>' ;
print_r($_SESSION);
echo '<pre>';?>


