<!DOCTYPE html>
<html>
	
<head>
	<title>
		How to call PHP function
		on the click of a Button ?
	</title>
</head>

<body style="text-align:center;">
	
	<h1 style="color:green;">
		quiz
	</h1>
	
	<h4>
		what is your names ?
	</h4>




    
	<?php
        $score = 1;
        if(isset($_POST['button1'])) {
			button1();
		}
		function button1() {
            if ($_POST['n'] == " hi1"){
                echo "true";
                $score = 0;
                $score = $score + 1 ;
                echo $score; 
            }else{
                echo "false";
            }
		}
	?>


	<form method="post">
        <input type="radio"  name="n" value=" hi1">hi1
        <input type="radio"  name="n" value=" hi2">hi2
        <input type="radio"  name="n" value=" hi3">hi3
        <br><br><br>
        <input type="submit" name="button1" class="button" value="Next" />
    </form>
</body>
<script>
    let next = document.getElementsByTagName("input")[3];
    let ele = document.getElementsByTagName("input");
    next.disabled = true;
    function radio_action() {
    for (let i =0 ; i < 3 ; i++)
    ele[i].onclick = function() {
    next.disabled = false;
    }
}
radio_action()
</script>
</html>