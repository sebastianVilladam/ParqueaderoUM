<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends BaseApiController
{
    public function index()
    {
      $users = User::orderBy('id','asc')->get();
      return $this->sendResponse(
        $users, 'users retrieved succssfully'
      );
    }

    public function store (Request $request)
  {
    $input = $request->all();
    $input['password'] = Hash::make($input['password']);
    User::create($input);
    return $this->sendResponse(
      null, 'user created successfully'
    );
  }

  public function show(User $user)
  {
    return $this->sendResponse(
      $user, 'user retieved successfully'
    );
  }

  public function update(Request $request, User $user)
  {
    $input = $request->all();

    $user -> fill($input);
    $user -> save();

    return $this ->sendResponse(
      $user, 'user uodated successfully'
    );
  }

  public function destroy(User $user)
  {
    $user->delete();

    return $this->sendResponse(
      $user, 'user deleted ok!'
    );
  }
}
