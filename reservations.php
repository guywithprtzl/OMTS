<!DOCTYPE html>
<html lang="en">
<title>Online Movie Database System</title>
<body>
<meta charset="UTF-8">

<table>
    <tr><th>Movie</th><th>Tickets Reserved</th><th>Theater Name</th><th>Theater Number</th><th>Start Time</th><th></th></tr>




<?php
/**
 * Created by PhpStorm.
 * User: Sean
 * Date: 2018-03-27
 * Time: 2:59 PM
 */

$dbh = mysqli_connect('127.0.0.1', "root", "", "themovies");
$loginID=$_POST["loginID"];
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$loginID = $_POST["loginID"];
$query = mysqli_query($dbh,"select title, ticketsReserved, theaterName, theaterNumber, startTime
      from  (customer as c right OUTER JOIN reservation as r ON r.accountNumber = c.accountNumber)
      	where c.loginID = '$loginID'");
if($query == NULL){
    echo "NULL Query";
}
while($row = mysqli_fetch_array($query)) {
    echo"<tr><td>".$row['title']."</td><td>".$row['ticketsReserved']."</td><td>".$row['theaterName']."</td><td>".$row['theaterNumber']."</td><td>".$row['startTime']."</td>
    <td>
    <form action=\"clearReservation.php\" method = \"post\">
         <input type = \"hidden\" name=\"startTime\" value = \"$row[4]\">
        <input type = \"hidden\" name=\"theaterNumber\" value = \"$row[3]\">
        <input type = \"hidden\" name=\"theaterName\" value = \"$row[2]\">
        <input type = \"hidden\" name=\"ticketsReserved\" value = \"$row[1]\">
        <input type = \"hidden\" name=\"title\" value = \"$row[0]\">
        <input type = \"hidden\" name=\"loginID\" value = \"$loginID\">
        <input type=\"submit\" name=\"submit\" value=\"Remove Reservation\"><br>
    </form>
    </td>
    
    </tr>";
}

?>

</table>
</body>
</html>
