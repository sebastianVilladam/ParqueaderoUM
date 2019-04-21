<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Public_Controller extends Controller
{
  public function home()
  {
    return view('public.index');
  }

  public function parking()
  {
    return view('public.universities');
  }

  public function parkingU()
  {
    return view('public.UPage');
  }

  public function parkingLot()
  {
    return view('public.parkingLot');
  }
}
?>
