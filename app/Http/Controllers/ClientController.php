<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    // public function index(){
    //     // 'client' => Client::paginate(10);

    //     return inertia('Client/Index',[
    //         'clients' => Client::orderBy('id')->get()
    //     ]);
    // }

    public function index() {
        $clients = Client::get();

        return inertia('Client/Index', [
            'clients' => Client::paginate(6)->through(fn($client) =>[
                'id' => $client->id,
                'last_name' =>$client->last_name,
                'first_name' =>$client->first_name,
                'address' =>$client->address,
                'level' =>$client->level
            ])
        ]);
    }

    public function create(){
        return inertia('Client/Create');
    }
}
