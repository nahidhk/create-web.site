<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $folderName = $_POST["folder"];
    
    if (!empty($folderName)) {
        if (!is_dir($folderName)) {
            if (mkdir($folderName)) {
              header("Location: done.html");
              exit();
            } else {
              header("Location: error.html");
              exit();
            }
        } else {
           header("Location: error.html");
           exit();
        }
    } else {
      header("Location: error.html");
      exit();
    }
}
?>
