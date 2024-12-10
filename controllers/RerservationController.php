<?php

namespace App\Controllers;

use App\Models\Achats;
// use App\Models\Clients;
// use App\Models\Succursales;
// use App\Models\Voitures;

use App\Providers\View;


class ReservationController {
   
    public function listeAchats()
    {
        $achat = new Achats;
        $achats = $achat->select('date_achat');

        // $client = new Clients;
        // $clients = $client->select('nom');

        // $succursale = new Succursales;
        // $succursales = $succursale->select('nom');

        // $voiture = new Voitures;
        // $voitures = $voiture->select('modele');




        // print_r($clients);
        // echo "<br><br>";
        // print_r($achats);
        // echo "<br><br>";
        // print_r($voitures);
        // echo "<br><br>";
        // print_r($succursales);
        // echo "<br><br>";

        // die();




        if ($achats) {
            return View::render('listeAchats', ['achats' => $achats]);
        } else {
            echo "error";
        }
    }
}
?>