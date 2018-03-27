

<!DOCTYPE html>
<html lang="en">
<title>Online Movie Database System</title>
<body>
<meta charset="UTF-8">

<table>
    <tr><th>Title</th><th>Running Time</th><th>Rating</th><th>Synopsis</th></tr>
<?php
/**
 * Created by PhpStorm.
 * User: Brayden
 * Date: 2018-03-26
 * Time: 3:20 PM
 */

$dbh = mysqli_connect('127.0.0.1', "root", "", "themovies");
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$query = mysqli_query($dbh,"select title, runningTime, rating, synopsis from movie");
if($query == NULL){
    echo "NULL Query";
}
while($row = mysqli_fetch_array($query)) {
    $name = $row['title'];
    echo "<tr><td>".$row['title']."</td><td>".$row['runningTime']."</td><td>".$row['rating']."</td><td>".$row['synopsis']."</td><td>
    <form action=\"selectTimes.php\" method = \"post\">
        <input type = \"hidden\" name=\"movie\" value = \"$name\">
        <input type=\"submit\" name=\"submit\" value=\"Go\"><br>
    </form>


    </td></tr>";
}




/*mysqli_close($dbh);*/

?>

</table>
</body>
</html>
