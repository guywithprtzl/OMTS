<!DOCTYPE html>
<html lang="en">
<title>Online Movie Database System</title>
<body>
<meta charset="UTF-8">

<table>
    <tr><th>Start Time</th><th>Seats Available</th><th>Theater Number</th><th>Theater Name</th></tr>


    <?php
    /**
     * Created by PhpStorm.
     * User: Brayden
     * Date: 2018-03-26
     * Time: 4:04 PM
     */

    $dbh = mysqli_connect("localhost", "root", "","themovies");

    $movie=$_POST["movie"];

    $rows = $dbh->query('select startTime,theaterNumber, theaterName from showing where title = "Phil The Thrill And The Reckless Kill"');


    foreach($rows as $row) {
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td></tr>";
    }




    echo $movie;

    ?>
</table>
</body>
</html>
