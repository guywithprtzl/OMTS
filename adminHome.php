<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<?php
/**
 * Created by PhpStorm.
 * User: Brayden
 * Date: 2018-03-26
 * Time: 2:38 PM
 */

$dbh = mysqli_connect('127.0.0.1', "root", "", "themovies");
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$query = mysqli_query($dbh,"select title, runningTime, rating, synopsis from movie");

$loginID = $_POST["loginID"];
if($query == NULL){
    echo "NULL Query";
}
echo "
<form action=\"memberManagement.php\" method = \"post\">
        <input type = \"hidden\" name=\"loginID\" value = \"$loginID\">
        <input type= \"submit\" name=\"submit\" value=\"Manage Members\"><br>
    </form>
<form action=\"movieManagement.php\" method = \"post\">
        <input type = \"hidden\" name=\"loginID\" value = \"$loginID\">
        <input type=\"submit\" name=\"submit\" value=\"Manage Movies\"><br>
    </form>
<form action=\"theaterManagement.php\" method = \"post\">
        <input type = \"hidden\" name=\"loginID\" value = \"$loginID\">
        <input type=\"submit\" name=\"submit\" value=\"Manage Theaters\"><br>
    </form>";


$dbh = null;
?>
</body>
</html>