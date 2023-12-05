<?php
session_start();
if (isset($_SESSION['user_id'])) {
    $upit= "SELECT * FROM korisnik WHERE `IDKorisnika` = ". (int)$_SESSION['user_id'];
    $rez= $mysqli->query($upit);
    if ($rez->num_rows > 0) {
        $user = $rez->fetch_assoc();
    } else {
        $user = false;
    }
}

?>