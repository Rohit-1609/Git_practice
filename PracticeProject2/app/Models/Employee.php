<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mobile;
use App\Models\Address;

class Employee extends Model
{
    use HasFactory;
    public $connection='mysql';
    public function mobile()
    {
        return $this->hasOne(Mobile::class);
    }

    public function address()
    {
        return $this->hasMany(Address::class);
    }
 
    public function projects()
    {
          return $this->belongsToMany(Project::class,'project_employees');
   }
        
        

        public function show_Employee($id){
          $employee=Address::find($id)->employee;
          return $employee;
        }
}
