
<!DOCTYPE html>
<html>
<body>



<?php
$dbh = mysqli_connect('127.0.0.1', "root", "", "themovies");
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$query = mysqli_query($dbh,"select title, runningTime, rating, synopsis from movie");
if($query == NULL){
    echo "NULL Query";
}
while($row = mysqli_fetch_array($query)) {;}
?>



</body>
</html>
