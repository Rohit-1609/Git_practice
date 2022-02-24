<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobile;
use App\Models\Employee;
class MobileController extends Controller
{
    //


public function show_Employee($id)
{
 $employee=Mobile::find($id)->employee;
return $employee;
}

public function show_Mobile($id){
    $mobiles=Employee::find($id)->mobile;
    //return $mobiles;
   return view('employees-mgmt/mobile', ['mobiles' => $mobiles]);
  }

}