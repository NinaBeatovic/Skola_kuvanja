
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <!--   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css"> --> 
    <link href="stil.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.js"> </script>
</head>
<body class="bg-light pt-5">
    <?php
    include 'header.php';
    ?>

<div class="main">
    <div class=" container cRefistracija ">
        <h2 >Registracija</h2> 
     <hr>
     <form class="forma1 form-control border-0" action="" method="post">
        <div class="row justify-content-start ">
            <h5 class="">     
                 Licni podaci</h5>   
        </div>
       <div class="row">
            <div class="col-md-2">
                <div class="row mb-3">
                    <span>Ime:</span>
                </div>
                <div class="row mb-3">
                    <span>Prezime:</span>
                </div>
                <div class="row mb-3">
                    <span>Username:</span>
                </div>
                <div class="row">
                    <span>Password:</span>
                </div>
                
            </div>
            <div class="col">
                <input type="text" class="form-control-sm mb-2" name="ime" > <br>
                <input type="text" class="form-control-sm mb-2" name="prezime" > <br>
                <input type="text" class="form-control-sm mb-2" name="username"> <br>
                <input type="text" class="form-control-sm" name="password" > <br>
            </div>
       </div>
       
        
        
            <div class="row mt-3">
           <div class="col-md-1 px-3">
           <input type="submit" value="Registruj se" name="registracija">
           </div>
           <div class="col">
           
           </div>
        </div>
    </form>
    </div>
</div>

<?php

        if (isset($_POST['registracija'])){
        include 'konekcija.php';

                     $ime=$password=$username=$prezime="";
                     if(isset($_POST['registracija']))
                     {
                         $upit= "INSERT INTO korisnik (`ime`, `prezime`, `username`, `password`)
                         VALUES(
                                 '".$_POST['ime']."',
                                 '".$_POST['prezime']."',
                                 '".$_POST['username']."',
                                 '".$_POST['password']."'
                         ) ";
                         $mysqli->query($upit);
                         echo "dodato";
                     }
                    
            }
?>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>