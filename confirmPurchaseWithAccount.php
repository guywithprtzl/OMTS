<?php
/**
 * Created by PhpStorm.
 * User: Brayden
 * Date: 2018-03-27
 * Time: 9:16 PM
 */

$dbh = mysqli_connect('127.0.0.1', "root", "", "themovies");
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$accNum = $_POST["accountNumber"];
$loginID = $_POST["loginID"];
$movie = $_POST["movie"];
$startTime = $_POST["startTime"];
$seatsAvailable = $_POST["seatsAvailable"];
$theaterNumber = $_POST["theaterNumber"];
$theaterName = $_POST["theaterName"];
$tix = $_POST["tix"];

if (mysqli_query($dbh,
    "select loginID, accountNumber from 
    customer where 
    loginID = '$loginID' and accountNumber = '$accNum'")){
        if ($tix < $seatsAvailable){
            if (mysqli_query($dbh,"insert into reservation  
          (ticketsReserved,startTime,theaterNumber,title,theaterName,accountNumber) VALUES 
          ('$tix','$startTime','$theaterNumber','$movie','$theaterName','$accNum')")){
                echo "<a href=\"homePageHTML.html\">Tickets Reserved. Click here to go home</a>";
            }
        }
        else{
            echo "<a href=\homePageHTML.html\">Error. There are not enough tickets to satisfy your request. Click here to go home</a>";
        }
}
else {
    echo "<a href=\"homePageHTML.html\">Error. You do not have a customer account. Click here to go home</a>";
}