<?php

require '/var/www/parrot-ctfs.com/html/api/dbconnect.php';
require '/var/www/parrot-ctfs.com/html/api/authcheck.php';
require '/var/www/parrot-ctfs.com/html/checkout/server/vendor/autoload.php';

$uuid = $_COOKIE['ctf_id'];


///ini_set('display_errors', 1);//NOT FOR PRODUCTION
///ini_set('display_startup_errors', 1);//NOT FOR PRODUCTION
//ini_set('max_execution_time', 100); //300 seconds = 5 minutes. In case if your CURL is slow and is loading too much (Can be IPv6 problem)
//error_reporting(E_ALL);//NOT FOR PRODUCTION

$sql = "SELECT * FROM users WHERE uuid = '$uuid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $cid = $row['customer_id'];
        $permid = $row['perm_id'];
        $email = $row['email'];
        $name = $row['username'];
        $paid = $row['is_paid'];
        $username = $row['username'];
    }
}

$stripe = new \Stripe\StripeClient(
    '<api key>'
  );
if($paid == 'true'){
  $cancel = $stripe->customers->delete(
    $cid,
    []
  ); //delete current customer, removing subscriptions related to it


$addNew = $stripe->customers->create([
    'description' => $permid, //this is used to identify, anything else can be changed by the user 
    'email' => $email,
    'name' => $username,
  ])['id'];

if($addNew){
    $sql = "UPDATE users SET customer_id = '$addNew' WHERE uuid = '$uuid'";
    $conn->query($sql);

    $sql = "UPDATE users SET is_paid = 'false' WHERE uuid = '$uuid'";
    $conn->query($sql);

    $sql = "UPDATE users SET is_free = 'true' WHERE uuid = '$uuid'";
    $conn->query($sql);
    header("Location: /editprofile.php?msgText=Your account has been downgraded to a free account. We are sorry to see you go and hope that you consider coming back!");
} else {
    header("Location: /editprofile.php?msgText=Error: Could not downgrade. Please contact support.");
    die();
}
} else {
    header("Location: /editprofile.php?msgText=Error: You are not a paid user, but you could always purchase a subscription :)");
    die();
}


?>
