<?php 

require '/var/www/staging.parrot-ctfs.com/html/api/vendor/autoload.php';
require '/var/www/staging.parrot-ctfs.com/html/api/dbconnect.php';
require '/var/www/staging.parrot-ctfs.com/html/api/authcheck.php';

?>


<html> 
    <head> 
        <title> Temp Plans Page </title> 
    <head> 
    <body> 
        <center> 
            <h1> Plans and Upgrades </h1>
        <a href="/api/payment-redirect.php?pid=price_1L4HqgE2h9GivJVY6Eni3uqs&type=subscription"> Infosec 'n Friends </a><br><br>
        <a href="/api/payment-redirect.php?pid=price_1L4I34E2h9GivJVY9BfVsoBg&type=subscription"> Active Directory Labs Pro </a><br><br>
        <a href="/api/payment-redirect.php?pid=price_1L4I2BE2h9GivJVYLH4XcRsN&type=subscription"> AWS Cloud Hunt</a><br><br>
        <a href="/api/stripe-dashboard.php"> Customer Portal</a> <br> <br> <br> 
        </center>
    </body>
        <style>
            body {
                background-color: black;
                color: white;
            }
        </style>
</html>  