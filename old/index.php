<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Travail Pratique 1 — Catalogue de produits ">
    <meta name="author" content="Samuel Dorneval - No d'étudiant: 0366635">
    <meta name="keywords" content="Page de catalogue de produits">
    <title>TP 1</title>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="assets/js/script.js"></script>
</head>

<body>
    <nav role="menubar">
        <div class="topnav container" id="myTopnav">
            <a href="#" class="logo" role="menuitem"><img src="https://www.mitsubishi-motors.ca/content/dam/mitsubishi-motors/images/logos/nav-logo-black.svg" alt="logo"></a>
            <div class="liens-nav">
                <a href="index.php" role="menuitem">Accueil</a>
                <a href="index.php" role="menuitem">À propos</a>
                <div class="dropdown">
                    <bouton class="dropbtn">Nos véhicules ▾</bouton>
                    <div class="dropdown-content">
                        <a href="index.php" role="menuitem">Vehicules </a>
                        <a href="index.php" role="menuitem">Offres spéciales</a>
                        <a href="index.php" role="menuitem">Vehicules d'occasion</a>
                    </div>
                </div>
                <a href="index.php" role="menuitem">Contact</a>
            </div>
            <div class="search-user">
                <a href="order-index.php" class="search"><i class="fa fa-search"></i></a>
                <a href="client-index.php" class="user"><i class="fa fa-user"></i></a>
            </div>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
    </nav>

    <header class="entete">
        <section class="fil-ariane container">
            <span><a href="">Vehicules </a> > <a href=""> Tous les véhicules</a></span>
        </section>
    </header>

    <div class="catalogue-container container">

        <main>
            <!-- <header>
            <h2>Nos timbres vedettes</h2>
        </header> -->
            <section class="catalogue">
                <div class="catalogue-title">
                    <h2>Tous les véhicules</h2>
                    <div class="list-grid">
                        <div class="button-list"><i class="fa fa-th-list"></i></div>
                        <div class="button-grid active"><i class="fa fa-th"></i></div>
                    </div>
                </div>

                <article class="carte">
                    <a href="#" class="image">
                        <img src="https://www.mitsubishi-motors.ca/content/dam/mitsubishi-motors-ca/images/cars/outlander-phev/2025/primary/hero/2024_Menu_Outlander_PHEV.png?width=480&quality=70&auto=webp" alt="Outlander PHEV">
                    </a>
                    <h3><a href="">2025 Outlander PHEV</a></h3>
                    <span><span class="carte-prix">À partir de 48,698$</span></span>
                    <a class="bouton" href="order-create.php">Voir le véhicule</a>
                </article>

                <article class="carte">
                    <a href="#" class="image">
                        <img src="https://www.mitsubishi-motors.ca/content/dam/mitsubishi-motors-ca/images/cars/eclipse-cross/2024/primary/hero/2024_Menu_Eclipse_Cross.png?width=480&quality=70&auto=webp" alt="Eclipse Cross">
                    </a>
                    <h3><a href="">2025 Eclipse Cross</a></h3>
                    <span><span class="carte-prix">À partir de 34,798$</span></span>
                    <a class="bouton" href="order-create.php">Voir le véhicule</a>
                </article>

                <article class="carte">
                    <a href="#" class="image">
                        <img src="https://www.mitsubishi-motors.ca/content/dam/mitsubishi-motors-ca/images/pages/homepage/2024-rvr-menu.png?width=480&quality=70&auto=webp" alt="
                        RVR">
                    </a>
                    <h3><a href="">2025 RVR</a></h3>
                    <span><span class="carte-prix">À partir de 24,798$</span></span>
                    <a class="bouton" href="order-create.php">Voir le véhicule</a>
                </article>

                <article class="carte">
                    <a href="#" class="image">
                        <img src="https://www.mitsubishi-motors.ca/content/dam/mitsubishi-motors-ca/images/cars/mirage/2024/primary/hero/2024_Menu_Mirage.png?width=480&quality=70&auto=webp" alt="Mirage">
                    </a>
                    <h3><a href="">2025 Mirage</a></h3>
                    <span><span class="carte-prix">À partir de 16,998$</span></span>
                    <a class="bouton" href="order-create.php">Voir le véhicule</a>
                </article>

                <article class="carte">
                    <a href="#" class="image">
                        <img src="https://www.mitsubishi-motors.ca/content/dam/mitsubishi-motors-ca/images/cars/outlander-phev/2025/primary/hero/2024_Menu_Outlander_PHEV.png?width=480&quality=70&auto=webp" alt="Outlander PHEV">
                    </a>
                    <h3><a href="">2024 Outlander PHEV</a></h3>
                    <span><span class="carte-prix">À partir de 48,698$</span></span>
                    <a class="bouton" href="order-create.php">Voir le véhicule</a>
                </article>

                <article class="carte">
                    <a href="#" class="image">
                        <img src="https://www.mitsubishi-motors.ca/content/dam/mitsubishi-motors-ca/images/cars/eclipse-cross/2024/primary/hero/2024_Menu_Eclipse_Cross.png?width=480&quality=70&auto=webp" alt="Eclipse Cross">
                    </a>
                    <h3><a href="">2024 Eclipse Cross</a></h3>
                    <span><span class="carte-prix">À partir de 34,798$</span></span>
                    <a class="bouton" href="order-create.php">Voir le véhicule</a>
                </article>

                <article class="carte">
                    <a href="#" class="image">
                        <img src="https://www.mitsubishi-motors.ca/content/dam/mitsubishi-motors-ca/images/pages/homepage/2024-rvr-menu.png?width=480&quality=70&auto=webp" alt="
                        RVR">
                    </a>
                    <h3><a href="">2024 RVR</a></h3>
                    <span><span class="carte-prix">À partir de 24,798$</span></span>
                    <a class="bouton" href="order-create.php">Voir le véhicule</a>
                </article>

                <article class="carte">
                    <a href="#" class="image">
                        <img src="https://www.mitsubishi-motors.ca/content/dam/mitsubishi-motors-ca/images/cars/mirage/2024/primary/hero/2024_Menu_Mirage.png?width=480&quality=70&auto=webp" alt="Mirage">
                    </a>
                    <h3><a href="">2024 Mirage</a></h3>
                    <span><span class="carte-prix">À partir de 16,998$</span></span>
                    <a class="bouton" href="order-create.php">Voir le véhicule</a>
                </article>
            </section>

        </main>
    </div>
    <footer id="pied-principal">
        <div>
            <a href="#" class="logo">
                <img src="https://www.mitsubishi-motors.ca/content/dam/mitsubishi-motors/images/logos/nav-logo-black.svg" alt="logo"></a>
            </a>
            <div class="reseaux-sociaux">
                <a href="#" class="fa fa-instagram"><span>Instagram</span></a>
                <a href="#" class="fa fa-facebook"><span>Facebook</span></a>
                <a href="#" class="fa fa-google"><span>Google</span></a>
            </div>
        </div>
        <div>
            <a href="#">Voir nos modèles</a>
            <a href="#">Aide</a>
            <a href="#">Profil</a>
            <a href="#">Prendre un rendez-vous</a>
            <a href="#">Heures d'ouverture</a>
            <a href="#">Trouver une succursale</a>
        </div>
        <div>
            <div>
                <a href="#">Contactez-nous</a>
                <a href="#">Termes et conditions</a>
                <a href="#">Langues</a>
                <a href="#">Membres</a>
            </div>

        </div>
    </footer>


</body>

</html>