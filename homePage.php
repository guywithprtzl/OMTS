
<!DOCTYPE html>
<html>
<body>



<?php
$dbh = mysqli_connect('127.0.0.1', "root", "", "themovies");
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$loginID = $_POST["userID"];
$passwordHash = $_POST["password"];


$query = mysqli_query($dbh,"select loginID, passwordHash, userType from systemuser where loginID = '$loginID' and passwordHash = '$passwordHash'");
if($query == NULL){
    echo "<a href=\"homePageHTML.html\">Account not found. Clock here to return to the home page.</a>";
}
while($row = mysqli_fetch_array($query)) {
    if ($row['userType'] == 'c'){
        echo "<form action=\"customerHome.html\" method = \"post\">
        <input type = \"hidden\" name=\"loginID\" value = $row[0]>
        <input type=\"submit\" name=\"submit\" value=\"Continue\"><br>
    </form>";
    }
    else{
        echo"<h1>Not a customer</h1>";
    }
}
?>



</body>
</html>
