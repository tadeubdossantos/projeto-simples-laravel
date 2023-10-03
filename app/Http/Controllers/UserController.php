<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\FormRequestUser;

class UserController extends Controller
{
    // consumo da API de usuários
    public function getDataFromAPI() {
        $response = Http::get('https://run.mocky.io/v3/ce47ee53-6531-4821-a6f6-71a188eaaee0');
        if(!$response->successful()) {
            abort(500, 'Erro na solicitação para a API externa');
        }
        $users = $response->json()['users'];
        foreach($users as $u) {
            try {
                User::create([
                    'name' => $u['name'],
                    'age' => $u['age'],
                    'email' => $u['email'],
                    'password' => bcrypt('12345678')
                ]);
            }
            catch (\Illuminate\Database\QueryException $e) {
                //Caso já constar o usuário então vá para a próxima iteração
                if ($e->errorInfo[1] === 1062) {
                    continue;
                }
            }
        }
    }

    public function index() {
        $users = User::paginate(10);
        return view('pages.users.paginacao', compact('users'));
    }

    public function update(FormRequestUser $request, $id) {

        $findUser = USER::where('id', $id)->first();
        return view('pages.users.atualiza', compact('findUser'));
    }
}
