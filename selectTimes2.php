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
    
    $movie=$_POST["movie"];
    $loginID = $_POST["loginID"];

    $dbh = mysqli_connect('127.0.0.1', "root", "", "themovies");
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $query = mysqli_query($dbh,"select startTime, seatsAvailable,theaterNumber, theaterName from showing where title = '$movie'");
    if($query == NULL){
        echo "NULL Query";
    }
    while($row = mysqli_fetch_array($query)) {
        $startTime = $row['startTime'];
        $seatsAvailable = $row['seatsAvailable'];
        $theaterNumber = $row['theaterNumber'];
        $theaterName = $row['theaterName'];
        echo "<tr><td>".$row['startTime']."</td><td>".$row['seatsAvailable']."</td><td>".$row['theaterNumber']."</td><td>".$row['theaterName']."</td>
    <td>
    <form action=\"purchase.php\" method = \"post\">
        <input type = \"hidden\" name=\"loginID\" value = \"$loginID\">
        <input type = \"hidden\" name=\"movie\" value = \"$movie\">
        <input type = \"hidden\" name=\"startTime\" value = \"$startTime\">
        <input type = \"hidden\" name=\"seatsAvailable\" value = \"$seatsAvailable\">
        <input type = \"hidden\" name=\"theaterNumber\" value = \"$theaterNumber\">
        <input type = \"hidden\" name=\"theaterName\" value = \"$theaterName\">
        <input type=\"submit\" name=\"submit\" value=\"Buy Tickets Now!\"><br>
    </form>
    </td>
    
    </tr>";
    }




    echo $movie;

    ?>
</table>
</body>
</html>
<!--<input type = \"hidden\" name=\"loginID\" value = \"$loginID\">-->