<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClientRequest;
use App\Http\Services\CreateClientService;
use Illuminate\Http\Request;

class CreateClientController extends Controller
{
    protected CreateClientService $createClientService;

    public function __construct(CreateClientService $createClientService)
    {

        $this->createClientService = $createClientService;
    }
    public function create(CreateClientRequest $request)
    {
        $this->createClientService->create($request->all());
    }
}
