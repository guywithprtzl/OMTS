

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

$dbh = new PDO('mysql:host=localhost;dbname=themovies', "root", "");
$rows = $dbh->query("select title, runningTime, rating, synopsis from movie");
foreach($rows as $row) {
    $name = $row[0];
    echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>
    <form action=\"selectTimes.php\" method = \"post\">
        <input type = \"hidden\" name=\"movie\" value = \"$name\">
        <input type=\"submit\" name=\"submit\" value=\"Go\"><br>
    </form>


    </td></tr>";
}




$dbh = null;

?>

</table>
</body>
</html>
