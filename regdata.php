<?php
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$newData = array(
    'email' => $email,
    'username' => $username,
    'password' => $password
);

// পাসওয়ার্ড নামে JSON ফাইল তৈরি করা
$passwordFilename = $password . '.json';
file_put_contents($passwordFilename, json_encode($newData));

// "regdata.json" ফাইলে ডাটা সেভ করা
$regdataFilename = 'regdata.json';
$existingData = file_get_contents($regdataFilename);
$existingData = json_decode($existingData, true);
$existingData[] = $newData;
file_put_contents($regdataFilename, json_encode($existingData));

//echo 'Data saved successfully in ' . $passwordFilename . ' and regdata.json';
?>

<!DOCTYPE html>
<html>

<head>
   <link rel="stylesheet" href="style.css">
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Login Now </title>
</head>

<body>
  <center>

<img class="gif1" src="px.gif"/>
<h1>Account create successful please login now !</h1>
<button onclick="window.location.href='index.html'" class="btn">Login</button>
</center>



</body>

</html>