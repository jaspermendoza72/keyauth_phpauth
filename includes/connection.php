<?php

// added headers for security
header("x-xss-protection: 1; mode=block");
header("strict-transport-security: max-age=31536000; includeSubDomains; preload");
header("Permissions-Policy: interest-cohort=()");
header("x-content-type-options: nosniff");
header("x-frame-options: DENY");
header("Referrer-Policy: no-referrer");

// disable PHP errors
error_reporting(0);

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("sql311.infinityfree.com", "if0_34929840", "AUqHOHbYkfw", "if0_34929840_gatorstream");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$logwebhook = "https://discord.com/api/webhooks/1148462986290286602/aeoYaoka819_x9oWc3UOwv3IarNkJkpMLjQ_2TEQOcwfuQr7x_UDRv7hxqaaPb7TceF_";
$adminwebhook = "https://discord.com/api/webhooks/1148462986290286602/aeoYaoka819_x9oWc3UOwv3IarNkJkpMLjQ_2TEQOcwfuQr7x_UDRv7hxqaaPb7TceF_";
$webhookun = "KeyAuth Logs";
$adminwebhookun = "KeyAuth Admin Logs";

$adminapikey = "";
$shoppyAPIkey = "";
$proxycheckapikey = "";
?>