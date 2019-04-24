<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ParkingLot;
use App\University;
use App\User;
use App\Parking;

class Employees_controller extends Controller
{
  public function selection($id)
  {
    $watchman = User::find($id);
    $uni_id = $watchman->uni_id;
    $university = University::find($uni_id);
    $parkingLots = ParkingLot::where('university_id', $uni_id)->get();
    return view('employees.selection', ['list' => $parkingLots])->with('name',$university->name);
  }

  public function place($id)
  {
    $parkingLot = ParkingLot::find($id);
    $parkings = Parking::where('parkingLot_id', $id)->get();
    return view('employees.laborPlace', ['data' => $parkingLot, 'registers' => $parkings]);
  }

  public function addParking(Request $request)
  {
    $input = $request->all();

    $park_id = $input['parkingLot_id'];
    $parkingLot = ParkingLot::find($park_id);

    $capacity = $parkingLot->capacity;
    $free = $parkingLot->free;
    $flag = false;

    if($input['action'] == 'Salida' & $free + 1 <= $capacity)
    {
      $free++;
      $flag = true;
    }

    if($input['action'] == 'Ingreso' & $free - 1 >= 0)
    {
      $free--;
      $flag = true;
    }

    if($flag)
    {
      $parkingLot->free = $free;
      $parkingLot->save();
      Parking::create($input);
    }

    return redirect()->route('place', ['id' => $park_id]);
  }

  public function search()
  {
    return view('employees.plateSearch');
  }

  public function vehiclesIn()
  {
    return view('employees.vehiclesIn');
  }
}
?>
