<?php

namespace App\Http\Services;

use App\Models\Client;


class CreateClientService {
    public function create($data){
        $client = new Client();
        $client->name = $data['name'];
        $client->email = $data['email'];
        $client->cpf = $data['cpf'];
        $client->save();
    }
}