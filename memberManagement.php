

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Online Movie Database System</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="omtscss.css">
</head>

<body>

<table>
    <tr><th>LoginID</th><th>Account Number</th><th>First Name</th><th>Last Name</th></tr>
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
    $ID = $_POST["loginID"];
    $query = mysqli_query($dbh,"select * from customer");
    if($query == NULL){
        echo "NULL Query";
    }
    while($row = mysqli_fetch_array($query)) {
        $loginID = $row['loginID'];
        echo "<tr><td>".$row['loginID']."</td><td>".$row['accountNumber']."</td><td>".$row['fName']."</td><td>".$row['lName']."</td><td>
    <form action=\"reservations.php\" method = \"post\">
        <input type = \"hidden\" name=\"loginID\" value = \"$loginID\">
        <input type=\"submit\" name=\"submit\" value=\"View Rental History\"><br>
    </form>
    </td>
    <td>
    <form action=\"clearMember.php\" method = \"post\">
         <input type = \"hidden\" name=\"accountNumber\" value = \"$row[0]\">
        <input type = \"hidden\" name=\"loginID\" value = \"$row[1]\">
        <input type = \"hidden\" name=\"streetNum\" value = \"$row[2]\">
        <input type = \"hidden\" name=\"streetName\" value = \"$row[3]\">
        <input type = \"hidden\" name=\"town\" value = \"$row[4]\">
        <input type = \"hidden\" name=\"postalCode\" value = \"$row[5]\">
        <input type = \"hidden\" name=\"email\" value = \"$row[6]\">
        <input type = \"hidden\" name=\"fName\" value = \"$row[7]\">
        <input type = \"hidden\" name=\"lName\" value = \"$row[8]\">
        <input type = \"hidden\" name=\"creditCardNumber\" value = \"$row[9]\">
        <input type = \"hidden\" name=\"creditCardExpiry\" value = \"$row[10]\">
        <input type = \"hidden\" name=\"ID\" value = \"$ID\">

        <input type=\"submit\" name=\"submit\" value=\"Remove Member\"><br>
    </form>
    </td>

    </td></tr>";
    }




    /*mysqli_close($dbh);*/

    ?>

</table>
</body>
</html>
