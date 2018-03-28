<?php
/**
 * Created by PhpStorm.
 * User: Brayden
 * Date: 2018-03-28
 * Time: 2:16 AM
 */


$dbh = mysqli_connect('127.0.0.1', "root", "", "themovies");
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$iD = $_POST["loginID"];
$stNum = $_POST["streetNum"];
$stName = $_POST["streetName"];
$theaterName = $_POST["theaterName"];
$nS = $_POST["numberOfScreens"];
$pC = $_POST["postalCode"];
$tN = $_POST["town"];
$pN = $_POST["phoneNumber"];

if(mysqli_query($dbh,"select * from theaterComplex where theaterName = '$theaterName'") == NULL){
    if(mysqli_query($dbh,"insert into theaterComplex (theaterName,streetNum,streetName,town,postalCode,phoneNumber,numberOfScreens)
    values ('$theaterName','$streetNum','$streetName','$tN','$pC','$pN','$nS')")){
        echo "<h3>You have updated your profile</h3>";
        echo "<form action=\"theaterManagement.php\" method = \"post\">
        <input type = \"hidden\" name=\"loginID\" value = \"$iD\">
        <input type=\"submit\" name=\"submit\" value=\"Go Home\"><br>
    </form>";
    }
}

if(mysqli_query($dbh,"update theaterComplex set streetNum = '$stNum', streetName = '$stName', 
    town='$tN',postalCode = '$pC', phoneNumber = '$pN', numberOfScreens = '$nS' where theaterName = '$theaterName'")){
    echo "<h3>You have updated your profile</h3>";
    echo "<form action=\"theaterManagement.php\" method = \"post\">
        <input type = \"hidden\" name=\"loginID\" value = \"$iD\">
        <input type=\"submit\" name=\"submit\" value=\"Go Home\"><br>
    </form>";
}
else{
    echo "<h3>There was an error updating your Theater. Go back and try again.</h3>";
}
