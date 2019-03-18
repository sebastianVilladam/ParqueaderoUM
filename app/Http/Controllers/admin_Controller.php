<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin_controller extends Controller
{
  public function listSelection()
  {
    return view('admin.listSelection');
  }

  public function uList()
  {
    return view('admin.universitiesList');
  }

  public function adminU()
  {
    return view('admin.adminUniversity');
  }

  public function uSettings()
  {
    return view('admin.uSettings');
  }

  public function uLots()
  {
    return view('admin.uLots');
  }

  public function lotSettings()
  {
    return view('admin.lotSettings');
  }

  public function lotAdd()
  {
    return view('admin.lotAdd');
  }
}
?>
