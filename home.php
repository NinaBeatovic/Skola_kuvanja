<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">-->
    <link href="stil.css" rel="stylesheet">

    <script src="js/bootstrap.bundle.js"> </script>
    
</head>
<body class="bg-light pt-5">
    
       <?php
       include 'konekcija.php';
       include 'login.php';
       include 'header.php';
       ?>

       <header class="main-header py-5 border-bottom">
            <div class="container">
                
                <div class="row align-items-center gx-md-5">
                    <div class="col-md-6">
                        <div class="home-header-text-holder pe-md-5">
                            <h1 class="fs-3 fw-normal">
                               Dobrodosli u moju skolu kuvanja!
                            </h1>
                            <h2>
                                <fs-5 class="fs-5 fw-light text-secondary">
                                   Ukoliko zelite da poboljsate svoje kuvarske sposobnosti, pridruzite nam se u zajednickim casovima kuvanja!
                                </fs-5>
                            </h2>
                            <a href="registracija.php" class="btn btn-sm btn-success mt-2 mb-3 d-inine-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-add me-2" viewBox="0 0 16 16">
                                    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                    <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z"/>
                                </svg>
                               Registruj se
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 p-0 m-0">
                        <div class="home-header-image-holder" style="width: 350px; height: 200px;">
                            <img class="rounded img-fluid shadow-sm full-width" src="Slike/naslovna.jpg" alt="">
                        </div>
                    </div>
                </div>
                
            </div>
       </header>

       <section class="site-featues py-4 border-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="feature-item d-flex align-items-center bg-white p-3 border rounded mb-md-0 mb-3">
                            <div class="flex-shrink-0">
                                <img class="img-fluid" src="Slike/clock.webp" alt="">
                            </div>
                            <div class="flex-grow-1 ms-3">
                               <a href="#" class="text-decoration-none text-dark">  <h3 class="fs-5">
                                Grupni casovi kuvanja
                              </h3></a>
                                <p class="small text-secondary">
                                   Prijavite se na vreme za casove kuvanja u nasim grupnim terminima <br>
                                   Svakog utorka i cetvrtka od 19h ili ponedljka i petka og 18h
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-item d-flex align-items-center bg-white p-3 border rounded mb-md-0 mb-3">
                            <div class="flex-shrink-0">
                                <img class="img-fluid" src="Slike/responsive.webp" alt="">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <a href="#" class="text-decoration-none text-dark">
                                    <h3 class="fs-5">
                                        Personalni casovi kuvanja
                                    </h3>
                                </a>
                                <p class="small text-secondary">
                                   Vi i vas odabran partner mozete izabrati vaseg omiljenog sefa koji ce vam u dogovorenim terminima odrzavati personalizovane casove recepata vaseg izbora
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-item d-flex align-items-center bg-white p-3 border rounded  mb-md-0 mb-3">
                        <div class="flex-shrink-0">
                            <img class="img-fluid" src="Slike/tick.webp" alt="">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h3 class="fs-5">
                                <a href="#" class="text-decoration-none text-dark">
                                    <h3 class="fs-5">
                                       U manjku ste sa vremenom?
                                    </h3>
                                </a>
                            </h3>
                            <p class="small text-secondary">
                               Na nasem sajtu takodje mozete naci recepte koje mozete isprobati sami!
                        </div>
                    </div>
                </div>
                </div>
            </div>
       </section>


      


      

    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>