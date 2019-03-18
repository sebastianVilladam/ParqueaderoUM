<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin_controller extends Controller
{
  public function listSelection()
  {
    return view('admin.listSelection');
  }
}
?>
