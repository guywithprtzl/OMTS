<?php
/**
 * Created by PhpStorm.
 * User: Brayden
 * Date: 2018-03-28
 * Time: 1:45 AM
 */
$dbh = mysqli_connect('127.0.0.1', "root", "", "themovies");
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$loginID = $_POST["loginID"];
$movie = $_POST["movieTitle"];
$content = $_POST["content"];
$result = mysqli_query($dbh, "select accountNumber from customer where loginID = '$loginID'");
$row = mysqli_fetch_assoc($result);
$row1 = $row['accountNumber'];
if(mysqli_query($dbh, "insert into review (movieTitle,content,accountNumber) values ('$movie','$content','$row1')")){
    echo "<a href=\"homePageHTML.html\">Review Added! Click Here to Return</a>";
}
else{
    echo "<h3>Something went wrong. There may be an error with your account.</h3>";
}