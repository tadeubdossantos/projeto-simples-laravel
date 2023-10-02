<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    // consudo da API
    public function getDataFromAPI() {
        $response = Http::get('https://run.mocky.io/v3/ce47ee53-6531-4821-a6f6-71a188eaaee0');
        if(!$response->successful()) {
            abort(500, 'Erro na solicitação para a API externa');
        }
        $users = $response->json()['users'];
        foreach($users as $u) {
            User::create([
                'name' => $u['name'],
                'age' => $u['age'],
                'email' => $u['email'],
                'password' => bcrypt('12345678')
            ]);
        }
    }

}
