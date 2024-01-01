<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['name'];
    $email = $_POST['gmail'];
    $password =($_POST['Password']); 

    $server = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbName = "login";

    $con = new mysqli($server, $dbUser, $dbPassword, $dbName);

    if ($con->connect_error) {
        die("Error: " . $con->connect_error);
    }

    $query="INSERT INTO userinfo (email, p1 , p2)
            VALUES( '$username', '$email','$password')";
            if($con->query($query)==true)
            {
                header("Location: ../index.html");
            }else 
            {
                die("details ".$con->error);
            }

}
?>
