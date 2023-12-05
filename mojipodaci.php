<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css"> -->
    <link href="stil.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.js"> </script>
</head>
<body class="bg-light pt-5">
    
       <?php
       include 'konekcija.php';
       include 'login.php';
       include 'header.php';
       ?>

      <div class="container">

            <form action="" method="post">
                <br><br>
                <h4>Moj profil</h4>
                <span>Ime: <?php  echo $user['ime']  ?>  </span>
                <br>
                <span>Prezime: <?php  echo $user['prezime']  ?>  </span>
                <br>
                <span>Username: <?php  echo $user['username']  ?>  </span>
                <br>
                <span>Password: <?php  echo $user['password']  ?>  </span>
                <br><br>
               <!-- <input type="submit" value="Izmeni" name="izmeni">
                <br> -->
                
                
            </form>
            
            
            <?php
            if(isset($_POST['izmeni']))
            {
                echo '<form action="" method="post">';
                echo "Sta zelite da izmenite?";
               
                echo '<input type="text" name="izmena">';//stari username(ono sto zelimo da menjamo)
                echo "u";
                echo '<input type="text" name="izmenjeno"> ';//novo (ono u sta zelimo da promenimo)

                echo '<input type="submit" value="Izmeni" name="zamena">'; //dugme
                echo '</form>';
            }

            if(isset($_POST['zamena']))
            {
                
                $upit = "UPDATE korisnik SET username '".$_POST['izmena']."' = '".$_POST['izmenjeno']."' WHERE username = '".$user['username']."'";
                $mysqli -> query($upit);

                header('Location: mojipodaci.php');
            }
            ?>
      </div>
                    <div class="section px-5">

                       
                        <?php

                        $upitkorisnik = "SELECT * from korisnik where ime = '".$user['ime']."'";
                        
                        $rez = $mysqli ->query($upitkorisnik);
                        $idkorisnika = 0;
                        while ($red=$rez ->fetch_assoc())
                        {
                            $idkorisnika = $red['IDKorisnika'];
                        }                       
                        $upit= "SELECT * from prijava where IDKorisnika = '".$idkorisnika."'";
                            
                        $rez2=$mysqli->query($upit);

                        echo "<table>";
                        echo "<tr>";
                        echo "<th>ID Prijave </th>";
                        echo "<th>ID Kursa </th>";
                        echo "<th>ID Korisnika</th>";
                        echo "</tr>";
                        
                        while($red2=$rez2->fetch_assoc())
                        {
                            $idprijave=$red2['IDPrijave'];
                            $idkursa=$red2['IDKursa'];
                            $idkorisnika=$red2['IDKorisnika'];
                    
                        echo "<tr>";
                        echo "<td>" .$idprijave . "</td>";
                        echo "<td>" .$idkursa . "</td>";
                        echo "<td>" .$idkorisnika . "</td>";
                     
                        echo "</tr>";
                        }
                        echo "</table>";
                        ?>
                        
                    </div>


      

    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>