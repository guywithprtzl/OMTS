<!DOCTYPE html>
<html lang="en">
<head>
	<title>Online Movie Database System</title>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="omtscss.css">
</head>
<?php
/**
 * Created by PhpStorm.
 * User: Brayden
 * Date: 2018-03-27
 * Time: 7:28 PM
 */


$dbh = mysqli_connect('127.0.0.1', "root", "", "themovies");
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
# Personal Info
$iD=$_POST["loginID"];
$stNum=$_POST["streetNum"];
$stName=$_POST["streetName"];
$tN=$_POST["town"];
$pC=$_POST["postalCode"];
$eM=$_POST["email"];
$fName=$_POST["fname"];
$lName=$_POST["lname"];
$cCN=$_POST["creditCardNumber"];
$cCED=$_POST["creditCardExpiryDate"];
$accNum=$_POST["accountNumber"];
$tix = $_POST["tix"];

#movie info
$movie = $_POST["movie"];
$startTime = $_POST["startTime"];
$seatsAvailable = $_POST["seatsAvailable"];
$theaterNumber = $_POST["theaterNumber"];
$theaterName = $_POST["theaterName"];

if (mysqli_query($dbh,
    "insert into customer (accountNumber, loginID,streetNum,streetName,town,postalCode,email,fName,lName,creditCardNumber,creditCardExpiryDate)
            values ('$accNum','$iD','$stNum','$stName','$tN','$pC','$eM','$fName','$lName','$cCN','$cCED')")){
    if ($tix < $seatsAvailable){
        if (mysqli_query($dbh,"insert into reservation  
          (ticketsReserved,startTime,theaterNumber,title,theaterName,accountNumber) VALUES 
          ('$tix','$startTime','$theaterNumber','$movie','$theaterName','$accNum')")){
            echo "your account number is:";
            echo $accNum;
            echo "<br><a href=\"homePageHTML.html\">Tickets Reserved. Click here to go home</a>";
        }
    }
    else{
        echo "Your account number is: ";
        echo $accNum;
        echo "<a href=\homePageHTML.html\">Error. There are not enough tickets to satisfy your request. Click here to go home</a>";
    }

}
else{
    echo "There was an error in creating your account. Please go back and try again";
}



?>