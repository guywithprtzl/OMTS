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
$accountNumber = $_POST["accountNumber"];
$loginID = $_POST["loginID"];
$streetNum = $_POST["streetNum"];
$streetName = $_POST["streetName"];
$town = $_POST["town"];
$postalCode = $_POST["postalCode"];
$email = $_POST["email"];
$fName = $_POST["fName"];
$lName = $_POST["lName"];
$creditCardNumber = $_POST["creditCardNumber"];
$creditCardExpiryDate = $_POST["creditCardExpiryDate"];
$ID = $_POST["ID"];

$result = mysqli_query($dbh, "select accountNumber from customer where loginID = '$loginID'");
$row = mysqli_fetch_assoc($result);
$row1 = $row['accountNumber'];
if(mysqli_query($dbh,"delete from customer where accountNumber = '$accountNumber'") and mysqli_query($dbh,"delete from systemuser where loginID = '$loginID'"))
{
    echo "<h3>You have removed the member</h3>";
    echo "<form action=\"adminHome.php\" method = \"post\">
        <input type = \"hidden\" name=\"loginID\" value = \"$ID\">
        <input type=\"submit\" name=\"submit\" value=\"Go Home\"><br>
    </form>";
}