<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ title }}</title>
    <link rel="stylesheet" href="{{asset}}css/style.css">
</head>

<body>
    <nav>
        <ul>
            <li><a href="{{ base }}/clients">Clients</a></li>
            <li><a href="#">Users</a></li>
            <li><a href="#">Login</a></li>
        </ul>
    </nav>
    <main> -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Travail Pratique 1 — Catalogue de produits ">
    <meta name="author" content="Samuel Dorneval - No d'étudiant: 0366635">
    <meta name="keywords" content="Page de catalogue de produits">
    <title>{{ title }}</title>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset}}css/main.css">
    <script src="{{asset}}js/script.js"></script>
</head>

<body>
    <nav role="menubar">
        <div class="topnav container" id="myTopnav">
            <a href="{{ base }}/client/catalogue" class="logo" role="menuitem"><img src="https://www.mitsubishi-motors.ca/content/dam/mitsubishi-motors/images/logos/nav-logo-black.svg" alt="logo"></a>
            <div class="liens-nav">
                <a href="{{ base }}/client/catalogue" role="menuitem">Accueil</a>
                <a href="{{ base }}/client/catalogue" role="menuitem">À propos</a>
                <div class="dropdown">
                    <bouton class="dropbtn">Nos véhicules ▾</bouton>
                    <div class="dropdown-content">
                        <a href="{{ base }}/client/catalogue" role="menuitem">Vehicules </a>
                        <a href="{{ base }}/client/catalogue" role="menuitem">Offres spéciales</a>
                        <a href="{{ base }}/client/catalogue" role="menuitem">Vehicules d'occasion</a>
                    </div>
                </div>
                <a href="{{ base }}/client/catalogue" role="menuitem">Contact</a>
            </div>
            <div class="search-user">
                <a href="{{ base }}/clients" class="search"><i class="fa fa-search"></i></a>
                <a href="{{ base }}/clients" class="user"><i class="fa fa-user"></i></a>
            </div>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
    </nav>
    <main>