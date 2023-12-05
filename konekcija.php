<?php 

    $mysqli= new mysqli("localhost", "root", "", "projekat_web");
    if ($mysqli->error)
    {
        die("greska". $mysqli->error);
    }
  
?>
