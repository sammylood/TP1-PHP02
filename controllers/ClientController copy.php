<?php

namespace App\Controllers;

use App\Models\Clients;
use App\Models\Achats;
use App\Models\Succursales;
use App\Models\Voitures;
use App\Providers\View;
use App\Providers\Validator;

class ClientController
{

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

    public function show($data = [])
    {
        if (isset($data['id']) && $data['id'] != null) {
            $client = new Clients;
            $selectId = $client->selectId($data['id']);
            if ($selectId) {
                return View::render('client/show', ['client' => $selectId]);
            } else {
                return View::render('error', ['msg' => 'Could not find this client']);
                return View::render('error', ['msg' => 'Could not find this client']);
            }
        }
        return View::render('error');
    }

    public function create()
    {
        $voiture = new Voitures;
        $voitures = $voiture->select('voiture');

        print_r($voitures);
        die();

        return View::render('client/create', ['achats' => $achats, ]);
    }

    public function store($data)
    {
        // print_r($data);
        $validator = new Validator;
        $validator->field('nom', $data['nom'])->min(2)->max(10);
        $validator->field('adresse', $data['adresse'])->required();
        $validator->field('tel', $data['tel'])->required();
        $validator->field('code_postal', $data['code_postal'], 'Code postal')->required();
        $validator->field('courriel', $data['courriel'])->required();
        // $validator->field('city_id', $data['city_id'], 'City')->required()->number();

        if ($validator->isSuccess()) {
            $client = new Clients;
            $insert = $client->insert($data);

            if ($insert) {
                return View::redirect('clients');
            } else {
                return View::render('error');
            }
        } else {
            $errors = $validator->getErrors();
            // print_r( $errors);
            $achat = new Achats;
            $achats = $achat->select('achat');

            return View::render('client/create', ['errors' => $errors, 'inputs' => $data, 'achats' => $achats]);
        }
    }

    public function edit($data = [])
    {
        if (isset($data['id']) && $data['id'] != null) {

            $client = new Clients;
            $selectId = $client->selectId($data['id']);
            if ($selectId) {
                $achat = new Achats;
                $achats = $achat->select('achat');
                //print_r($selectId);
                return View::render('client/edit', ['achats' => $achats, 'inputs' => $selectId]);
            }
        }
        return View::render('error');
    }

    public function update($data = [], $get = [])
    {
        if (isset($get['id']) && $get['id'] != null) {
            $validator = new Validator;
            $validator->field('nom', $data['nom'])->min(2)->max(10);
            $validator->field('adresse', $data['adresse'])->required();
            $validator->field('tel', $data['tel'])->required();
            $validator->field('code_postal', $data['code_postal'], 'Zip Code')->required();
            $validator->field('courriel', $data['courriel'])->required();
            // $validator->field('city_id', $data['city_id'], 'City')->required()->number();

            if ($validator->isSuccess()) {
                $client = new Clients;
                $update = $client->update($data, $get['id']);

                if ($update) {
                    return View::redirect('client/show?id=' . $get['id']);
                }
            } else {
                $errors = $validator->getErrors();
                // print_r( $errors);
                $achat = new Achats;
                $achats = $achat->select('achat');

                return View::render('client/edit', ['errors' => $errors, 'inputs' => $data, 'achats' => $achats]);
            }
        }
        return View::render('error');
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
