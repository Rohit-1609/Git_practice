<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Address;
use App\models\Employee;
class AddressController extends Controller
{
    //
    public function add_Address($id)
    {
        $employee =Employee::find($id);
         $address= new Address();
         $address->name='kalyani nagar';
         $address->city='Pune';
         $address->type='current';
         $employee->address()->save($address);
    }

    public function show_Address($id){
        $addresses=Employee::find($id)->address;
      //  return $address;
      return view('employees-mgmt/address', ['addresses' => $addresses]);
      }
}
