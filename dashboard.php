<!--
<?php
if(isset($_GET['password'])) {
    $password = $_GET['password'];
    $jsonFilePath = $password . '.json';

    if(file_exists($jsonFilePath)) {
        $jsonData = file_get_contents($jsonFilePath);

        if($jsonData !== false) {
            // JSON ডেটা পার্স করুন
            $decodedData = json_decode($jsonData, true);

            if($decodedData !== null) {
                // JSON ডেটা সঠিকভাবে ডিকোড হয়েছে

              
                ?>
                
    
<?php
            } else {

include('not.html'); // যদি শর্ত পূর্ণ না হয়, তবে 'not.html' ফাইলটি ইনক্লুড করা হবে
             
 // যদি শর্ত পূর্ণ না হয়, তবে 'not.html' ফাইলটি ইনক্লুড করা হবে
          
            }
        } else { 
include('not.html'); // যদি শর্ত পূর্ণ না হয়, তবে 'not.html' ফাইলটি ইনক্লুড করা হবে
       
        }
    } else {

      
          echo "<script>window.open('not.html','_self')</script>";

    }
} else {

   echo "<script>window.open('nologin.html','_self')</script>";

}
?>
-->
<!DOCTYPE html>
<html lang="en">
<head>
  
  <link rel="stylesheet" href="tstyle.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="node.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard</title>
</head>
<body>
<section class="tnav">
  <div style="float: left;">
    <span class="navt">
   <?php echo  $decodedData['username']?>NAHID HK
   </span>
  </div>
  <div id="div1" onclick="main()" class="profile">
     
  </div>
</section> 
 <!--- profile box---->
 <section id="block" class="prof">
  <center>
<img height="200" src="user.png"/>     
     
     <br>
 <user d:=z onsuspend="user">
     @<?php echo  $decodedData['username']?>

   </user>
   </center>
<p onclick="error()" class="email">
  <span class="utxt">
     <?php echo $decodedData['username']?> 
</span> <button class="main">main</button>
  <br>
  <span class="getio">
   <?php echo $decodedData['email']?>

      </span>
</p>   

<p onclick="error()" class="email" >
  <span class="utxt">Password!</span>
  <br>
  <span class="getio">   <?php echo $decodedData['password']?>
</span>
</p>  
<button onclick="window.location.href='index.html'" class="email"><i class="fa-solid fa-right-from-bracket fa-rotate-180"></i>   Logout</button>  


 </section>
 <div onscroll="nahid()"></div>
 <span id="usejs" class="navo">nahidappltd0@gmail.com</span>
 
 
 
 <script src="https://kit.fontawesome.com/c88ec28bee.js" crossorigin="anonymous"></script>
 <script src="main.js" ></script>
 <script src="app.js"></script>
</body>
</html>
