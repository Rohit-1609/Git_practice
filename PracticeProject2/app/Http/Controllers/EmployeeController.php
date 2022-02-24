<?php

namespace App\Http\Controllers;
use App\Models\Mobile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;
use App\Models\Company;
use App\models\Project;
use App\models\Address;

class EmployeeController extends Controller
{
    //
    public function index(){
        $employee= Employee::all();
     //   return $employee;
    return view('employees-mgmt/index', ['employees' => $employee]);
    }


    public function index1(){
        $employees = DB::table('practiceproject2.employees')
        ->leftJoin('practiceproject3.companies', 'employees.company_id', '=', 'practiceproject3.companies.id')
        ->select('practiceproject2.employees.*', 'practiceproject3.companies.name as company_Name','practiceproject3.companies.address as company_Address',
        'practiceproject3.companies.city as company_City',
        'practiceproject3.companies.state as company_State',
        'practiceproject3.companies.country as company_Country'
        )
        ->paginate(5);


        $company = Company::all();
      
        // return view('employees-mgmt/create', []);
     //   return $employee;
    return view('employees-mgmt/index1', ['employees' => $employees]);
    }


    public function add_Employee()
    {
       
        $employee = new Employee();
        $employee->firstname='Nilesh';
        $employee->lastname='Jadhav';
        $employee->email='nileshjadhav@gmail.com';
        $employee->designation='Php Developer';
        $employee->salary='15000';
        $employee->company_id='2';
        $employee->save();

        $mobile = new Mobile();
        $mobile->mobileNo='8803118877';
        
        $employee->mobile()->Save($mobile);

       
        
        $projects=[1];
        $employee->Projects()->attach($projects);
    
    }

    
    public function show_Mobile($id)
    {
     $mobile=Employee::find($id)->mobile;
     return $mobile;
     //return view('employees-mgmt/mobile', ['mobiles' => $mobile]);


    }


    public function show_Employee($id){
        $employees=Project::find($id)->employee;
        //return $employee;
        return view('employees-mgmt/index', ['employees' => $employees]);
      }

    
}
