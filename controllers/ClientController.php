<?php

namespace App\Controllers;

use App\Models\Clients;
use App\Models\Achats;
use App\Models\Succursales;
use App\Models\Voitures;
use App\Providers\View;
//use App\Providers\Validator;

class ClientController
{


    public function accueil()
    {
        $client = new Clients;

        $clients = $client->select('nom');
        if ($clients) {
            return View::render('client/catalogue', ['clients' => $clients]);
        } else {
            echo "error";
        }
    }




    public function index()
    {
        $client = new Clients;
        $clients = $client->select('nom');

        $achat = new Achats;
        $achats = $achat->select('date_achat');
        

        $succursale = new Succursales;
        $succursales = $succursale->select('nom');

        $voiture = new Voitures;
        $voitures = $voiture->select('modele');


        if ($clients) {
            return View::render('client/index', ['clients' => $clients, 'modeles' => $voitures, 'succursales' => $succursales, 'achats' => $achats]);
        } else {
            echo "error";
        }
    }

    public function show($data = [])
    {
        if (isset($data['id']) && $data['id'] != null) {
            // print_r($data);
            // die();
            $achat = new Achats;
            $selectId = $achat->selectId($data['id']);

            $client = new Clients;
            $clients = $client->selectId($data['id_client']);

            $voiture = new Voitures;
            $voitures = $voiture->select('modele');

            $succursale = new Succursales;
            $succursales = $succursale->select('nom');

            if ($selectId) {
                return View::render('client/show', ['achat' => $selectId, 'clients' => $clients, 'modeles' => $voitures, 'succursales' => $succursales]);
            } else {
                return View::render('error', ['msg' => 'Could not find this client']);
            }
        }
        return View::render('error');
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


    public function edit($data = [])
    {
        if (isset($data['id']) && $data['id'] != null) {

            $achat = new Achats;
            $selectId = $achat->selectId($data['id']);
            if ($selectId) {
                $client = new Clients;
                $clients = $client->selectId($data['id_client']);

                $voiture = new Voitures;
                $voitures = $voiture->select('modele');

                $succursale = new Succursales;
                $succursales = $succursale->select('nom');
                //print_r($selectId);
                return View::render('client/edit', ['clients' => $clients, 'modeles' => $voitures, 'succursales' => $succursales, 'inputs' => $selectId]);
            }
        }
        return View::render('error');
    }




    public function store($data)
    {
        // $validator = new Validator;
        // $validator->field('nom', $data['nom'])->min(2)->max(10);
        // // $validator->field('adresse', $data['adresse'])->required();
        // // $validator->field('tel', $data['tel'])->required();
        // // $validator->field('code_postal', $data['code_postal'], 'code_postal')->required();
        // // $validator->field('courriel', $data['courriel'])->required();
        // // $validator->field('city_id', $data['city_id'], 'City')->required()->number();

        // if ($validator->isSuccess()) {
            $client = new Clients;
            $insert = $client->insert($data);

            if ($insert) {
                // print_r($data);
                // echo "<br><br>";
                // print_r($insert);
                // die();
                return View::redirect('clients');
            } else {
                return View::render('error');
            }
        // } 
        // else {
        //     $errors = $validator->getErrors();
        //     // print_r( $errors);
            
        //     $succursale = new Succursales;
        //     $succursales = $succursale->select('nom');

        //     $achat = new Achats;
        //     $achats = $achat->select('date_achat');

        //     $voiture = new Voitures;
        //     $voitures = $voiture->select('modele');



        //     return View::render('client/create',
        //         ['errors' => $errors, 'inputs' => $data]
        //     );
        // }
    }

    public function delete($data)
    {
        $client = new Clients;
        $delete = $client->delete($data['id']);
        
        if ($delete) {
            return View::redirect('clients');
        }
        return View::render('error');
    }
}
