<header class="header fixed-top">
<link href="stil.css" rel="stylesheet">
<script src="js/bootstrap.bundle.js"> </script>
<nav class="navbar navbar-expand-lg bg-light fixed-top border-bottom small blur-filter">
        <div class="container">
           
            <button
                class="navbar-toggler border-0"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbar-content"
                aria-controls="navbar-content"
                aria-expanded="false"
                aria-label="Toggle-navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-content">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="home.php" class="nav-link active" aria-current="page">Pocetna</a>
                    </li>
                    <li class="nav-item">
                        <a href="courses.php" class="nav-link" >Kursevi</a>
                    </li>
                    <li class="nav-item">
                        <a href="mojipodaci.php" class="nav-link" >Moji podaci</a>
                    </li>
                </ul>
                <div class="collapse logincollapse navbar-collapse text-white " id="login-content" style="margin-right: 0px;">

<ul class="navbar-nav" >
   
    <?php if (isset($user)) { ?>
       
        <li class="nav-item ">
            <a href="logout.php"  class="prijava btn  btn-primary  rounded align-items-center d-inline-flex text-center justify-content-center ">
                Izloguj se
            </a>
        </li>
    <?php } else { ?>
        <li class="nav-item me-2 ">
            <a href="registracija.php" class="prijava btn  btn-warning  rounded align-items-center d-inline-flex text-center justify-content-center ">
                Registrujte se
            </a>
        </li>

        <li class="nav-item ">
            <a href="prijava.php"  class="prijava btn  btn-danger  rounded align-items-center d-inline-flex text-center justify-content-center ">
                Prijavi se
            </a>
        </li>
    <?php } ?>
</ul>

</div>
                
            </div>
        </div>
       </nav>
</header>