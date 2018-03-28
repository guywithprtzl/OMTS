<?php
/**
 * Created by PhpStorm.
 * User: Brayden
 * Date: 2018-03-28
 * Time: 12:54 AM
 */


$dbh = mysqli_connect('127.0.0.1', "root", "", "themovies");
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$iD=$_POST["loginID"];
$stNum=$_POST["streetNum"];
$stName=$_POST["streetName"];
$tN=$_POST["town"];
$pC=$_POST["postalCode"];
$eM=$_POST["email"];
$fName=$_POST["fName"];
$lName=$_POST["lName"];
$cCN=$_POST["creditCardNumber"];
$cCED=$_POST["creditCardExpiryDate"];
$accNum=$_POST["accountNumber"];

if(mysqli_query($dbh,"update customer set streetNum = '$stNum', streetName = '$stName', 
    town='$tN',postalCode = '$pC', email = '$eM', fName = '$fName',
     lName = '$lName',creditCardNumber = '$cCN', creditCardExpiryDate = '$cCED'")){
    echo "<h3>You have updated your profile</h3>";
    echo "<form action=\"customerHome.php\" method = \"post\">
        <input type = \"hidden\" name=\"loginID\" value = \"$iD\">
        <input type=\"submit\" name=\"submit\" value=\"Go Home\"><br>
    </form>";
}
else{
    echo "<h3>There was an error updating your profile. Go back and try again.</h3>";
}
