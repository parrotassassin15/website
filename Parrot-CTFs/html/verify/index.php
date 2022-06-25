<link rel="shortcut icon" href="https://parrot-ctfs.com/favicon.ico" />
<?php

require '/var/www/parrot-ctfs.com/html/api/dbconnect.php';

$code = hash('sha256', mysqli_real_escape_string($conn, $_GET['code']));
$email = hash('sha256', mysqli_real_escape_string($conn, $_GET['email']));

$sql = "UPDATE users SET email_verified='true' WHERE email='".$email."' AND veri='".$code."' AND email_verified='false'";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Your account was verified successfully!');window.location = '/login.php'</script>";
} else {
  echo "<script>alert('Could not verify your account, try again later or contact support@parrot-ctfs.com');window.location = '/login.php'</script>";
}

$conn->close();


?>
