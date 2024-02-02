<?php
session_start();

$server = "localhost";
$username = "root";
$password = "";
$db = "workshop";

$con = mysqli_connect($server, $username, $password, $db);

if(!$con) {
    die("Connection to db failed due to " . mysqli_connect_error());
}

// echo "Connection Successfull";

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];

    $sql = "select * from login where email = '".$email."'";

    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($result);

    if($row) {
        $_SESSION['email'] = $email;

        header("location:reset.html");
    } else {
        session_start();
        $message = "SORRY! 'Email does not match'";

        $_SESSION['loginMessage'] = $message;
        
        header("location:fp.php");
    }
}

?>