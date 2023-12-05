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
          <?php 
          $upitkorisnik = "SELECT * from korisnik where `ime` = '".$user['ime']."'";
          $rez = $mysqli ->query($upitkorisnik);
          while ($red=$rez ->fetch_assoc())
          {
              $idkorisnika = $red['IDKorisnika'];
          }
        if(isset($_POST['prijavami']))
        {
            
            $idkursa=1;
            $upit = "INSERT INTO prijava(`IDKursa`, `IDKorisnika`) VALUES (".(int)$idkursa.", '".$idkorisnika."') ";
            $mysqli->query($upit);
            

        }
        else if(isset($_POST['prijavaat']))
        {
            
            $idkursa=2;
            $upit = "INSERT INTO prijava(`IDKursa`, `IDKorisnika`) VALUES (".(int)$idkursa.", '".$idkorisnika."') ";
            $mysqli->query($upit);

        }
        else if(isset($_POST['prijavadfk']))
        {
            
            $idkursa=5;
            $upit = "INSERT INTO prijava(`IDKursa`, `IDKorisnika`) VALUES (".(int)$idkursa.", '".$idkorisnika."') ";
            $mysqli->query($upit);

        }
        else if(isset($_POST['prijavaot']))
        {
            
            $idkursa=6;
            $upit = "INSERT INTO prijava(`IDKursa`, `IDKorisnika`) VALUES (".(int)$idkursa.", '".$idkorisnika."') ";
            $mysqli->query($upit);
           

        }
        else if(isset($_POST['prijavadjn']))
        {
            
            $idkursa=7;
            $upit = "INSERT INTO prijava(`IDKursa`, `IDKorisnika`) VALUES (".(int)$idkursa.", '".$idkorisnika."') ";
            $mysqli->query($upit);
            

        }


     ?>

       <section class="courses-list py-5">
        <form method="post">
                <div class="col-md-9 px-5">
                    <div class="list-group small">
                        <div class="list-group-item text-bg-light fw-bold d-flex justify-content-between align-items-center">
                            Dostupni kursevi
                            <span class="badge text-bg-warning rounded-pill">5 trenutnih kurseva</span>
                        </div>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="row align-items-center g-3">
                                <div class="col-md-4">
                                    <div class="course-image-holder">
                                        <img src="Slike/gmabori.jpg" class="rounded img-fluid mb-md-0 mt-md-0 mt-2" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h5>Mediteranska idila </h5>
                                    <p class="text-secondary">
                                        Kurs u trajanju od tri meseca omogucava vam da se upoznate sa najpozsnatijim jelima italijanske i spanske kuhinje
                                    </p>
                                    <p class="d-inline-flex align-items-center">
                                    <span class=" me-2 rounded-pill text-bg-warning px-2 py-1 small d-inline-flex align-items-center">
                                        <input type="submit" name="prijavami" class=" text-bg-warning border-0" value="Prijavi se">
                                        </span>
                                        <span class=" rounded-pill text-bg-success px-2 py-1 small">
                                            Cena: Rsd.7999/-
                                        </span>
                                    </p>
                                </div>
                            </div>

                            
                            
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="row align-items-center g-3">
                                <div class="col-md-4">
                                    <div class="course-image-holder">
                                        <img src="Slike/dumpling.jpg" class="rounded img-fluid mb-md-0 mt-md-0 mt-2" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h5>Azijske tajne </h5>
                                    <p class="text-secondary">
                                        Ovaj kurs, u trajanju od sest meseci podeljen je na dva dela tokom kojih cete uciti o japanskoj i kineskoj kuhinji uz nase najpoznatije eksperte!
                                    </p>
                                    <p class="d-inline-flex align-items-center">
                                    <span class=" me-2 rounded-pill text-bg-warning px-2 py-1 small d-inline-flex align-items-center">
                                        <input type="submit" name="prijavaat" class=" text-bg-warning border-0" value="Prijavi se" >
                                        </span>
                                        <span class=" rounded-pill text-bg-success px-2 py-1 small">
                                            Cena: Rsd 15 000/-
                                        </span>
                                    </p>
                                </div>
                            </div>

                            
                            
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="row align-items-center g-3">
                                <div class="col-md-4">
                                    <div class="course-image-holder">
                                        <img src="Slike/puzevi2.jpg" class="rounded img-fluid mb-md-0 mt-md-0 mt-2" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h5>Dani francuske kuhinje</h5>
                                    <p class="text-secondary">
                                        Gostovanja francuskih kuvara uz koje cete praviti sve najpoznatije fransuske specijalitete
                                    </p>
                                    <p class="d-inline-flex align-items-center">
                                    <span class=" me-2 rounded-pill text-bg-warning px-2 py-1 small d-inline-flex align-items-center">
                                        <input type="submit" name="prijavadfk" class=" text-bg-warning border-0" value="Prijavi se" >
                                        </span>
                                        <span class=" rounded-pill text-bg-success px-2 py-1 small">
                                            Cena: Rs.5000/-
                                        </span>
                                    </p>
                                </div>
                            </div>

                            
                            
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="row align-items-center g-3">
                                <div class="col-md-4">
                                    <div class="course-image-holder">
                                        <img src="Slike/tajland.jpg" class="rounded img-fluid mb-md-0 mt-md-0 mt-2" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h5>Obilazimo Tajland! </h5>
                                    <p class="text-secondary">
                                        Jednom nedeljno, sledecih 6 meseci, pridruzite nam se u ukusima tajlandske kuhinje!
                                    </p>
                                    <p class="d-inline-flex align-items-center">
                                    <span class=" me-2 rounded-pill text-bg-warning px-2 py-1 small d-inline-flex align-items-center">
                                        <input type="submit" name="prijavaot" class=" text-bg-warning border-0" value="Prijavi se" >
                                        </span>
                                        <span class=" rounded-pill text-bg-success px-2 py-1 small">
                                            Price: Rs.499/-
                                        </span>
                                    </p>
                                </div>
                            </div>

                            
                            
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="row align-items-center g-3">
                                <div class="col-md-4">
                                    <div class="course-image-holder">
                                        <img src="Slike/cevapi.jpg" class="rounded img-fluid mb-md-0 mt-md-0 mt-2" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h5>Domace je najbolje! </h5>
                                    <p class="text-secondary">
                                        Ukoliko niste iz nasih predela, omogucavamo vam casove kuvanja tradicionalne hrane sa celog Balkana!
                                    </p>
                                    <p class="d-inline-flex align-items-center">
                                    <span class=" me-2 rounded-pill text-bg-warning px-2 py-1 small d-inline-flex align-items-center">
                                        <input type="submit" name="prijavadjn" class=" text-bg-warning border-0" value="Prijavi se" >
                                        </span>
                                        <span class=" rounded-pill text-bg-success px-2 py-1 small">
                                            Price: Rs.499/-
                                        </span>
                                    </p>
                                </div>
                            </div>

                            
                            
                        </a>
                    </div>
                </div>
            </div>
        </div>
       </section>

  

     

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>