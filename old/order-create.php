<?php
require_once('classes/CRUD.php');

$crud = new CRUD;

$select = $crud->select('achats', 'date_achat', 'ASC');
$selectVoiture = $crud->select('voitures', 'modele', 'ASC');
$selectClient = $crud->select('clients', 'nom', 'ASC');
$selectSuccursale = $crud->select('succursales', 'nom', 'ASC');
?>

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
            <span><a href="">Voiture</a> > <a href=""> 2025 Outlander PHEW</a></span>
        </section>
    </header>

    <main class="produit container">
        <section class="produit-header">
            <div class="produit-photo">
                <div class="">
                    <img src="assets/images/outlander-phew.png" alt="Photo 01">
                </div>
                <div class="">
                    <img src="https://www.mitsubishi-motors.ca/content/dam/mitsubishi-motors-ca/images/cars/outlander-phev/2024/primary/exterior/24outlanderphev-01/W85_45_24OutlanderPHEV-01-Front-L.png?width=1080&auto=webp&quality=70" alt="Photo 01">
                </div>
                <div class="">
                    <img src="https://www.mitsubishi-motors.ca/content/dam/mitsubishi-motors-ca/images/cars/outlander-phev/2024/primary/exterior/24outlanderphev-01/W85_135_24OutlanderPHEV-01-Front-R.png?width=1080&auto=webp&quality=70" alt="Photo 02">
                </div>
                <div class="">
                    <img src="https://www.mitsubishi-motors.ca/content/dam/mitsubishi-motors-ca/images/cars/outlander-phev/2024/primary/exterior/24outlanderphev-01/W85_225_24OutlanderPHEV-01-Rear-L.png?width=1080&auto=webp&quality=70" alt="Photo 0">
                </div>
            </div>
            <div class="produit-achat">
                <h1><a href="">2025 OUTLANDER PHEW</a></h1>

                <form action="order-store.php" method="POST"><!-- action vide: travailler avec le même nom de colonne -->
                    <h2>Nouvelle commande</h2>

                    <label for="voitures">Voitures</label>
                    <select id="voitures" name="id_voiture" required>
                        <?php
                        foreach ($selectVoiture as $rowVoiture) {
                            // $id_auteur = $rowVoiture['id_auteur'];
                            // $selectSuccursale['$id_auteur'] = ;
                        ?>
                            <option value="<?= $rowVoiture['id_voiture']; ?>"><?= $rowVoiture['modele']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <label for="succursale">Succursales</label>
                    <select id="succursale" name="id_succursale" required>
                        <?php
                        foreach ($selectSuccursale as $rowSuccursale) {
                        ?>
                            <option value="<?= $rowSuccursale['id_succursale']; ?>"><?= $rowSuccursale['nom']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <label style="display:none" for="clients">clients</label>
                    <select id="client" name="id_client" style="display:none" required>
                        <?php
                        foreach ($selectClient as $rowClient) {
                            $row = $select;
                            $row['id_client'] = $rowClient['id'];
                        ?>

                            <option value="<?= $row['id_client']; ?>"><?= $rowClient['nom'] ?></option>
                        <?php
                        }
                        ?>
                    </select>

                    <label>Nom
                        <input type="text" name="nom">
                    </label>
                    <label>Adresse
                        <input type="text" name="adresse">
                    </label>
                    <label>Telephone
                        <input type="number" name="tel">
                    </label>
                    <label>Code postal
                        <input type="text" name="code_postal">
                    </label>
                    <label>Courriel
                        <input type="text" name="courriel">
                    </label>

                    <input type="submit" class="bouton" value="Demander un essai routier">
                </form>
            </div>
        </section>


        <section class="produit-description">
            <div class="produit-description-list">
                <span> <i class="fa fa-list-ul"></i> Détails</span>
                <span class="active"><i class="fa fa-book"></i><strong> Historique</strong></span>
                <span><i class="fa fa-file-text-o"></i> Autre</span>
            </div>
            <div class="produit-description-detail">
                <h3>Historique</h3>
                <p>The Outlander PHEV has evolved to deliver even more power, control and capability. The uniquely balanced twin-electric motors are the key to the Super All-Wheel Control system, which delivers an all-electric performance that’s smoother, quieter and more responsive than ever before.</p>
            </div>

        </section>
        <section class="catalogue">
            <div class="catalogue-title">
                <h2>Vous aimerez peut-être aussi...</h2>
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
        </section>



    </main>
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