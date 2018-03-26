

<!DOCTYPE html>
<html lang="en">
<title>Online Movie Database System</title>
<body>
<meta charset="UTF-8">

<table>
    <tr><th>Title</th><th>Running Time</th><th>Rating</th><th>Synopsis</th><th>Select</th></tr>
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
    echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td></tr>";
}



$dbh = null;

?>


    <form action="selectTime.php" method = "post">
        <input type="submit" value="View Times">
    </form>

</table>
</body>
</html>
