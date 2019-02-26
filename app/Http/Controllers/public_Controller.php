<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class public_Controller extends Controller
{
  public function home()
  {
    return view('public.index');
  }

  public function parking()
  {
    return view('public.universities');
  }
}
?>
