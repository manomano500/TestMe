<?php
$serverName ="localhost";
$dbuserName="root";
$dbpassword="";
$dpname="mprj";

$link = mysqli_connect($serverName,$dbuserName,$dbpassword,$dpname);

if (! $link){
    die("Conection Field ". mysqli_connect_errno());
}
else{
    echo "";
}
