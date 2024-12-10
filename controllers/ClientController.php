<?php

namespace App\Controllers;

use App\Models\Clients;
use App\Models\Achats;
use App\Models\Succursales;
use App\Models\Voitures;
use App\Providers\View;
// use App\Providers\Validator;

class ClientController
{

    // public function listeAchats()
    // {
    //     $achat = new Achats;
    //     $achats = $achat->select('date_achat');

    //     $client = new Clients;
    //     $clients = $client->select('nom');

    //     $succursale = new Succursales;
    //     $succursales = $succursale->select('nom');

    //     $voiture = new Voitures;
    //     $voitures = $voiture->select('modele');


    // //     print_r($clients);
    // //     echo "<br><br>";
    // //     print_r($achats);
    // //     echo "<br><br>";
    // //     print_r($voitures);
    // //     echo "<br><br>";
    // //     print_r($succursales);
    // //     echo "<br><br>";

    // //     die();

    //     if ($achats) {
    //         return View::render('client/listeAchats', ['achats' => $achats, 'clients' => $clients, 'succursales' => $succursales, 'modeles' => $voitures]);
    //     } else {
    //         echo "error";
    //     }
    // }

    public function index()
    {
        $client = new Clients;

        $clients = $client->select('nom');
        if ($clients) {
            //include('views/client/index_old.php');

            return View::render('client/index', ['clients' => $clients]);
        } else {
            echo "error";
        }
    }
    public function achats()
    {
        $achat = new Achats;
        $achats = $achat->select('date_achat');
        
        $client = new Clients;
        $clients = $client->select('nom');

        $succursale = new Succursales;
        $succursales = $succursale->select('nom');

        $voiture = new Voitures;
        $voitures = $voiture->select('modele');



        if ($achats) {
            //include('views/client/index_old.php');

            return View::render('achat/index', ['clients' => $clients, 'modeles' => $voitures, 'succursales' => $succursales, 'achats' => $achats]);
        } else {
            echo "error";
        }
    }


    public function create()
    {
        $client = new Clients;
        $clients = $client->select('nom');

        $achat = new Achats;
        $achats = $achat->select('date_achat');

        $voiture = new Voitures;
        $voitures = $voiture->select('modele');

        $succursale = new Succursales;
        $succursales = $succursale->select('nom');

        // print_r($clients);
        // echo "<br><br>";
        // print_r($achats);
        // echo "<br><br>";
        // print_r($voitures);
        // echo "<br><br>";
        // print_r($succursales);
        // echo "<br><br>";

        // die();

        return View::render('client/create', ['clients'=> $clients, 'modeles' => $voitures, 'succursales' => $succursales, 'achats' => $achats]);
    }

}