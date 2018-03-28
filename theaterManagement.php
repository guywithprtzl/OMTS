<!DOCTYPE html>
<html lang="en">
<head>
    <title>Online Movie Database System</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="omtscss.css">
</head>

<body>

<table>
    <tr><th>Theater</th></tr>
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
    $loginID = $_POST["loginID"];
    $query = mysqli_query($dbh,"select theaterName from theaterComplex");
    if($query == NULL){
        echo "NULL Query";
    }
    while($row = mysqli_fetch_array($query)) {
        echo "<tr><td>".$row['theaterName']."</td><td>
    <form action=\"theaterManagementPreInputPage.php\" method = \"post\">
        <input type = \"hidden\" name=\"theaterName\" value = \"$row[theaterName]\">
        <input type = \"hidden\" name=\"loginID\" value = \"$loginID\">
        <input type=\"submit\" name=\"submit\" value=\"View and Edit Info\"><br>
    </form>


    </td></tr>";

    }

    echo "<form action=\"theaterManagementPreInputPage.php\" method = \"post\">
        <input type = \"hidden\" name=\"theaterName\" value = \"\">
        <input type = \"hidden\" name=\"loginID\" value = \"$loginID\">
        <input type=\"submit\" name=\"submit\" value=\"Add a New Theater\"><br>
    </form>";



    /*mysqli_close($dbh);*/

    ?>

</table>
</body>
</html>
