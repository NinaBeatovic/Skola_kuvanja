<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="stil.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.js"> </script>
    <title>Document</title>
</head>
<body>
    <h2> ADMIN PANEL</h2>
    <form action="" method="post">
    <span>
        Podaci o korisnicima:
        <input type="submit" name="korisnici" value="-->" >
    </span>
    <br>
    <span>
        Podaci o kursevima:
        <input type="submit" name="kursevi" value="-->" >
    </span>
    <br>
    <span>
        Podaci o prijavama:
        <input type="submit" name="prijave" value="-->" >
    </span>
    </form>
<?php
    include 'konekcija.php';

    if(isset($_POST['korisnici']))
    {
        if (isset($_POST['brisanjekorisnika']))
        {
            $upit2= "DELETE FROM korisnik WHERE `IDKorisnika`=". (int)$_POST['obrisikorisnika'];
            $mysqli->query($upit2);}

        $upitkorisnici = "SELECT * FROM korisnik";

        $rez= $mysqli->query($upitkorisnici);
        echo "<table>";
        echo "<tr>";
        echo "<th>Ime </th>";
        echo "<th> Prezime </th>";
        echo "<th>Username</th>";
        echo "<th>Password</th>";
        echo "</tr>";
        while($red=$rez->fetch_assoc())
        {
            
                
               /*  while ($red= $rez->fetch_assoc())
                { */
                    $ime=$red['ime'];
                    $prezime=$red['prezime'];
                    $username=$red['username'];
                    $password=$red['password'];
                    
                    echo "<tr>";
                        echo "<td>" .$ime . "</td>";
                        echo "<td>" .$prezime . "</td>";
                        echo "<td>" .$username . "</td>";
                        echo "<td>" .$password . "</td>";
                     
                    echo "</tr>";
               /*  } */
               
             
            
        }
        echo "</table>";
        echo '<form action="" method="post">';
        echo "ID Korisnika:";
        echo '<input type="hidden" name="korisnici" value="1" />';
        echo ' <input type="text" name="obrisikorisnika">';
        echo '<input type="submit" name="brisanjekorisnika" value="Obrisi korisnika">';
       echo '</form>';

       
    }
    else if(isset($_POST['kursevi']))
    {

        $upitkurs = "SELECT * FROM kurs";

        $rez= $mysqli->query($upitkurs);
        echo "<table>";
        echo "<tr>";
        echo "<th>ID Kursa </th>";
        echo "<th> Naziv </th>";
        echo "<th>Broj prijavljenih</th>";
        echo "<th>Predavac</th>";
        echo "</tr>";
        while($red=$rez->fetch_assoc())
        {
            
                
               /*  while ($red= $rez->fetch_assoc())
                { */
                    $id=$red['IDKursa'];
                    $naziv=$red['naziv'];
                    $brprijavljenih=$red['brojprijavljenih'];
                    $predavac=$red['predvac'];
                    
                    echo "<tr>";
                        echo "<td>" .$id . "</td>";
                        echo "<td>" .$naziv . "</td>";
                        echo "<td>" .$brprijavljenih . "</td>";
                        echo "<td>" .$predavac . "</td>";
                     
                    echo "</tr>";
               /*  } */
               
            
            
        }
        echo "</table>";

        
    }
    else if(isset($_POST['prijave']))
    {
        if (isset($_POST['brisanjeprijave']))
        {
            $upit2= "DELETE FROM prijava WHERE `IDPrijave`=". (int)$_POST['obrisiprijavu'];
            $mysqli->query($upit2);}
        $upitkurs = "SELECT * FROM prijava";

        $rez= $mysqli->query($upitkurs);
        echo "<table>";
        echo "<tr>";
        echo "<th>ID Prijave </th>";
        echo "<th>ID Kursa </th>";
        echo "<th>ID Korisnika</th>";
        echo "</tr>";
        while($red=$rez->fetch_assoc())
        {
            
                
               /*  while ($red= $rez->fetch_assoc())
                { */
                    $idprijave=$red['IDPrijave'];
                    $idkursa=$red['IDKursa'];
                    $idkorisnika=$red['IDKorisnika'];
                    
                    echo "<tr>";
                        echo "<td>" .$idprijave . "</td>";
                        echo "<td>" .$idkursa . "</td>";
                        echo "<td>" .$idkorisnika . "</td>";
                     
                    echo "</tr>";
               /*  } */
               
            
            
        }
        echo "</table>";
        echo '<form action="" method="post">';
        echo "ID Prijave:";
        echo '<input type="hidden" name="prijave" value="1" />';
        echo ' <input type="text" name="obrisiprijavu">';
        echo '<input type="submit" name="brisanjeprijave" value="Obrisi prijavu">';
       echo '</form>';
    }
?>
</body>
</html>