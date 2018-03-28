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
$movie = $_POST["movie"];
echo "<form action=\"addFinalReview.php\" method = \"post\">
        <input type = \"text\" name = \"content\" method = \"post\">
        <input type = \"hidden\" name=\"loginID\" value = \"$loginID\">
        <input type = \"hidden\" name=\"movieTitle\" value = \"$$movie\">
        <input type=\"submit\" name=\"submit\" value=\"Continue\"><br>
    </form>";
