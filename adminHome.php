<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
	<link rel="stylesheet" href="omtscss.css">
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
$query1 = mysqli_query($dbh, "SELECT m.title, COUNT(ticketsReserved) as totalTicketsReserved FROM (movie as m LEFT OUTER JOIN reservation as r ON m.title = r.title) GROUP BY title ORDER BY COUNT(ticketsReserved) DESC");
$query2 = mysqli_query($dbh, "SELECT m.theaterName, COUNT(ticketsReserved) as totalTicketsReserved FROM (theatercomplex as m LEFT OUTER JOIN reservation as r ON m.theaterName = r.theaterName) GROUP BY theaterName ORDER BY COUNT(ticketsReserved) DESC");
$loginID = $_POST["loginID"];
if($query == NULL){
    echo "NULL Query";
}
$row1 = mysqli_fetch_array($query1);
echo "<table><tr><th>Most Popular Movie</th><th>Tickets Reserved</th></tr><tr><td>".$row1[0]."</td><td>".$row1[1]."</td></tr></table>";
$row2 = mysqli_fetch_array($query2);
echo "<br>";
echo "<table><tr><th>Most Popular Theater</th><th>Tickets Reserved</th></tr><tr><td>".$row2[0]."</td><td>".$row2[1]."</td></tr></table>";
echo "<br>
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
</html>