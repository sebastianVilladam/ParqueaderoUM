<?php

namespace App\Http\Controllers\Api;

use App\University;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UniversityController extends BaseApiController
{
    public function index()
    {
      $universities = University ::orderBy('id','asc')->get();
      return $this->sendResponse(
        $universities, 'universities retrieved succssfully'
      );
    }

    public function store (Request $request)
  {
    $input = $request->all();

    $university = University::create($input);

    return $this->sendResponse(
      $university, 'university created successfully'
    );
  }

  public function show(University $university)
  {
    return $this->sendResponse(
      $university, 'university retieved successfully'
    );
  }

  public function update(Request $request, University $university)
  {
    $input = $request->all();

    $university -> fill($input);
    $university -> save();

    return $this ->sendResponse(
      $university, 'university updated successfully'
    );
  }

  public function destroy(University $university)
  {
    $university->delete();

    return $this->sendResponse(
      $university, 'university deleted ok!'
    );
  }
}
