<?php
/**
 * Created by PhpStorm.
 * User: Sean
 * Date: 2018-03-27
 * Time: 2:51 PM
 */
$dbh = mysqli_connect('127.0.0.1', "root", "", "themovies");
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$loginID = $_POST["loginID"];
$query = mysqli_query($dbh,"select * from customer where loginID = '$loginID'");
$row = mysqli_fetch_assoc($query);
if($query){
    echo"
    
    
     <h3>Here you can update your profile info</h3>
     <form action=\"updateProfile.php\" method = \"post\">
     <input type = \"hidden\" name=\"loginID\" value = \"$loginID\">
     <input type = \"hidden\" name=\"accountNumber\" value = \"$row[accountNumber]\">
    First Name: <input type=\"text\" name=\"fName\" value=\"$row[fName]\"><br>
    Last Name: <input type=\"text\" name=\"lName\" value=\"$row[lName]\"><br>
    Street Name:<input type=\"text\" name=\"streetName\" value=\"$row[streetName]\"><br>
    Street Number:<input type=\"text\" name=\"streetNum\" value=\"$row[streetNum]\"><br>
    Town: <input type=\"text\" name=\"town\" value=\"$row[town]\"><br>
    Postal Code:<input type=\"text\" name=\"postalCode\" value=\"$row[postalCode]\"><br>
    e-Mail:<input type=\"text\" name=\"email\" value=\"$row[email]\"><br>
    Credit Card Number:<input type=\"text\" name=\"creditCardNumber\" value=\"$row[creditCardNumber]\"><br>
    Credit Card Expiry Date:<input type=\"text\" name=\"creditCardExpiryDate\" value=\"$row[creditCardExpiryDate]\"><br>
    <input type=\"submit\" value=\"Update Info\">
</form>";
}
else{
    echo"<h3>You do not have a profile because you have never made a purchase. Make a purchase today to create a profile!</h3>";
}
