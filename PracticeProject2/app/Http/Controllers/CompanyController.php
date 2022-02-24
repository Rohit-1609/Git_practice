<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
class CompanyController extends Controller
{
    //
                  //
                  public function add_Company()
                  {
                     
                      $company = new Company();
                      $company->name='Infosys';
                      $company->address='Hinjewadi';
                      $company->city='Pune';
                      $company->state='Maharashtra';
                      $company->country='India';
                      $company->save();
                  }
}
