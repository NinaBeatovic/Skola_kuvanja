<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--  <link rel="stylesheet" href="prijava.css"> -->
  <link href="stil.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.js"> </script>
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

    

    <table style="margin:auto">
    <h2 style="margin-left: 50%;">Prijava</h2>
        <tr>
            <td> <span>Username</span> </td>
            <td>

                <input type="text" name="username" placeholder="username">
            </td>
        </tr>
        <tr>
            <td> <span>Password</span>  </td>
            <td>
                <input type="text" name="password" placeholder="password">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="prijava" value="PRIJAVI SE">
            </td>
        </tr>

        <tr>
            <td>
            <a href="registracija.php" class="small text-dark">Nemate nalog</a>
            </td>
        </tr>
    </table>
    </form>
    <?php
    session_start();
    include 'konekcija.php';
   
    if (isset($_POST['prijava']))
    {       
            $upit= "SELECT * FROM korisnik WHERE `username` = '". $_POST['username']."' AND `password` = '". $_POST['password']."'";

            $rez= $mysqli->query($upit);


            if ($rez->num_rows > 0) {
                $red= $rez->fetch_assoc();
                $_SESSION['user_id'] = $red['IDKorisnika'];

                if ($red ["admin"]) {
                    header('Location: admin.php');
                } else {
                    header('Location: home.php');
                }
            } else {
                echo 'UNESITE PRAVE PODATKE';
            }
           
         
            
        
    }
 ?>
</body>
</html>