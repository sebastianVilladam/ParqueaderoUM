<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Employees_controller extends Controller
{
  public function selection()
  {
    return view('employees.selection');
  }
}
?>