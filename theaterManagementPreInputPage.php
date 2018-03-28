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
 * Date: 2018-03-28
 * Time: 2:26 AM
 */

$dbh = mysqli_connect('127.0.0.1', "root", "", "themovies");
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$theaterName = $_POST["theaterName"];
$loginID = $_POST["loginID"];
$query = mysqli_query($dbh,"select * from theatercomplex where theaterName = '$theaterName'");
$row = mysqli_fetch_assoc($query);
if($query != NULL){
    echo"
    
    
     <h3>Here you can update your Theater info:</h3>
	 <div class=\"form\">
     <form action=\"theaterManagementInputPage.php\" method = \"post\">
     <input type = \"hidden\" name=\"loginID\" value = \"$loginID\">
     <input type = \"hidden\" name=\"theaterName\" value = \"$row[theaterName]\">
    Street Name:<input type=\"text\" name=\"streetName\" value=\"$row[streetName]\"><br>
    Street Number:<input type=\"text\" name=\"streetNum\" value=\"$row[streetNum]\"><br>
    Town: <input type=\"text\" name=\"town\" value=\"$row[town]\"><br>
    Postal Code:<input type=\"text\" name=\"postalCode\" value=\"$row[postalCode]\"><br>
    Phone:<input type=\"text\" name=\"phoneNumber\" value=\"$row[phoneNumber]\"><br>
    Number of Screens:<input type=\"text\" name=\"numberOfScreens\" value=\"$row[numberOfScreens]\"><br>
    <input type=\"submit\" value=\"Update Info\">
</form>
</div>";
}
else{
    echo "<h3>Here you can update your Theater info</h3>
     <form action=\"theaterManagementInputPage.php\" method = \"post\">
     <input type = \"text\" name=\"loginID\" value = \"\">
    Theater Name<input type = \"hidden\" name=\"theaterName\" value = \"\">
    Street Name:<input type=\"text\" name=\"streetName\" value=\"\"><br>
    Street Number:<input type=\"text\" name=\"streetNum\" value=\"\"><br>
    Town: <input type=\"text\" name=\"town\" value=\"\"><br>
    Postal Code:<input type=\"text\" name=\"postalCode\" value=\"\"><br>
    Phone:<input type=\"text\" name=\"phoneNumber\" value=\"\"><br>
    Number of Screens:<input type=\"text\" name=\"numberOfScreens\" value=\"\"><br>
    <input type=\"submit\" value=\"Update Info\">
</form>";

}