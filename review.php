

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Online Movie Database System</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="omtscss.css">
</head>

<body>

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
    $loginID = $_POST["loginID"];
    $query = mysqli_query($dbh,"select title, runningTime, rating, synopsis from movie");
    if($query == NULL){
        echo "NULL Query";
    }
    while($row = mysqli_fetch_array($query)) {
        $name = $row['title'];
        echo "<tr><td>".$row['title']."</td><td>".$row['runningTime']."</td><td>".$row['rating']."</td><td>".$row['synopsis']."</td><td>
    <form action=\"addReview.php\" method = \"post\">
        <input type = \"hidden\" name=\"movie\" value = \"$name\">
        <input type = \"hidden\" name=\"loginID\" value = \"$loginID\">
        <input type=\"submit\" name=\"submit\" value=\"Add a Review\"><br>
    </form>


    </td></tr>";
    }




    /*mysqli_close($dbh);*/

    ?>

</table>
</body>
</html>
