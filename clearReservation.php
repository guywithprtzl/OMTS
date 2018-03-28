<?php
/**
 * Created by PhpStorm.
 * User: Brayden
 * Date: 2018-03-27
 * Time: 11:47 PM
 */

$dbh = mysqli_connect('127.0.0.1', "root", "", "themovies");
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$loginID = $_POST["loginID"];
$title = $_POST["title"];
$theaterName = $_POST["theaterName"];
$theaterNumber = $_POST["theaterNumber"];
$startTime = $_POST["startTime"];

$result = mysqli_query($dbh, "select accountNumber from customer where loginID = '$loginID'");
$row = mysqli_fetch_assoc($result);
$row1 = $row['accountNumber'];
if(mysqli_query($dbh,"delete from reservation where accountNumber = '$row1' and
          title = '$title' and theaterName = '$theaterName' and theaterNumber = '$theaterNumber' and startTime = '$startTime'"))
{
    echo "<h3>You have removed the reservation</h3>";
    echo "<form action=\"customerHome.php\" method = \"post\">
        <input type = \"hidden\" name=\"loginID\" value = \"$loginID\">
        <input type=\"submit\" name=\"submit\" value=\"Go Home\"><br>
    </form>";
}