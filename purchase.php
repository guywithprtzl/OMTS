<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Purchase</title>
</head>
<body>
<h1>Buy Some Tickets</h1>



<?php
/**
 * Created by PhpStorm.
 * User: Sean
 * Date: 2018-03-27
 * Time: 3:04 PM
 */
$dbh = mysqli_connect('127.0.0.1', "root", "", "themovies");
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$movie=$_POST["movie"];
$startTime = $_POST["startTime"];
$seatsAvailable = $_POST["seatsAvailable"];
$theaterName = $_POST["theaterName"];
$theaterNumber = $_POST["theaterNumber"];
$loginID = $_POST["loginID"];

#$movie;
#echo $startTime;
#echo $seatsAvailable;
#echo $theaterName;
#echo $theaterNumber;

$query = mysqli_query($dbh,"select title, runningTime, rating, synopsis from movie");
if($query == NULL){
    echo "NULL Query";
}
#while($row = mysqli_fetch_array($query)) {;}




    echo"
    <h3>Enter your account number if this is not your first purchase</h3>
    <form action=\"confirmPurchaseWithAccount.php\" method = \"post\">
    <input type = \"hidden\" name=\"loginID\" value = \"$loginID\">
    Number of Tickets:<input type = \"text\" name = \"tix\" value = \"\">
    Account Number: <input type = \"text\" name =\"accountNumber\" value=\"choose exactly 10 digits for your account number\"><br>
    <input type=\"submit\" value=\"Submit\">
    <form action=\"confirmPurchase.php\" method = \"post\">
    <input type = \"hidden\" name=\"movie\" value = \"$movie\">
    <input type = \"hidden\" name=\"startTime\" value = \"$startTime\">
    <input type = \"hidden\" name=\"seatsAvailable\" value = \"$seatsAvailable\">
    <input type = \"hidden\" name=\"theaterNumber\" value = \"$theaterNumber\">
    <input type = \"hidden\" name=\"theaterName\" value = \"$theaterName\">
    </form>
    
    <h3>If this is your first purchase, fill in this form to create a customer account</h3>
    <form action=\"confirmPurchase.php\" method = \"post\">
    <input type = \"hidden\" name=\"movie\" value = \"$movie\">
    <input type = \"hidden\" name=\"startTime\" value = \"$startTime\">
    <input type = \"hidden\" name=\"seatsAvailable\" value = \"$seatsAvailable\">
    <input type = \"hidden\" name=\"theaterNumber\" value = \"$theaterNumber\">
    <input type = \"hidden\" name=\"theaterName\" value = \"$theaterName\">
    <input type = \"hidden\" name=\"loginID\" value = \"$loginID\">
    Number of Tickets:<input type = \"text\" name = \"tix\" value = \"\">
    First Name: <input type=\"text\" name=\"fname\" value=\"\"><br>
    Last Name: <input type=\"text\" name=\"lname\" value=\"\"><br>
    Account Number: <input type = \"text\" name =\"accountNumber\" value=\"choose 10 numbers\"><br>
    Street Name:<input type=\"text\" name=\"streetName\" value=\"\"><br>
    Street Number:<input type=\"text\" name=\"streetNum\" value=\"\"><br>
    Town: <input type=\"text\" name=\"town\" value=\"\"><br>
    Postal Code:<input type=\"text\" name=\"postalCode\" value=\"\"><br>
    e-Mail:<input type=\"text\" name=\"email\" value=\"\"><br>
    Credit Card Number:<input type=\"text\" name=\"creditCardNumber\" value=\"\"><br>
    Credit Card Expiry Date:<input type=\"text\" name=\"creditCardExpiryDate\" value=\"\"><br>
    <input type=\"submit\" value=\"Submit\">
</form>";

?>
</body>
</html>





