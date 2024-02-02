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


$email = $_POST['email'];
$sql = "select * from login where email = '".$email."' ";

$result = mysqli_query($con, $sql);

$count = mysqli_num_rows($result);

if($count > 0) {
    // Generate OTP
    $otp = rand(11111, 99999);

    //Send OTP

    $html = "You OTP Verification Code is " .$otp;

    // mysqli_query($con, "update login set otp = '".$otp."' where email = '".$email."' ");
    smtp_mailer($email, 'OTP Verification', $html);

    $_SESSION['otp'] = $otp;
    $_SESSION['email'] = $email;

    // header("location:otp.php");

} else {
    $message = "SORRY! 'Email does not match'";

    $_SESSION['loginMessage'] = $message;
        
    header("location:fp.php");
}

function smtp_mailer($to, $subject, $msg) {
    $body = "";
        $body .= "Dear ,\n";
        $body .= $msg;

    
        $body .= "\n\nThank You!\n"; 
        $body .= "Regards\nMYB Systems\nEmail : alrhombusgarage@gmail.com";

        $headers = "From: MYB Systems <alrhombusgarage@gmail.com>";

        mail($to, $subject, $body, $headers);

        // echo $var;
}

?>