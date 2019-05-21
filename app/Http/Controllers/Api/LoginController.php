<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends BaseApiController
{
    public function index()
    {
      //
    }

    public function store (Request $request)
  {
    $input = $request->all();
    $email = $request->input("email");
    $password = $request->input("password");

    $user = User::where('email', $email)->first();

    if($user != null)
    {
      if(Hash::check($password, $user->password))
      {
        return $this->sendResponse($user, "Bienvenido!!");
      }
      else
      {
          $data = ['message' => 'Contraseña incorrecta', 'error' => true, 'id' => 406];
          return response()->json($data, 406);
      }
    }
    else
    {
      $data = ['message' => 'No se ha encontrado el usuario', 'error' => true, 'id' => 404];
      return response()->json($data, 404);
    }
  }

  public function show(University $university)
  {
    //
  }

  public function update(Request $request, University $university)
  {
    //
  }

  public function destroy(University $university)
  {
    //
  }
}
