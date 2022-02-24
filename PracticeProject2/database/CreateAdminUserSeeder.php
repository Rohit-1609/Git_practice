<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;
class CreateAdminUserSeeder extends Seeder
{
   /**

     * Run the database seeds.

     *

     * @return void

     */

    public function run()

    {

        $user = User::create([

        	'name' => 'Nilesh Jadhav', 

        	'email' => 'nilesh123@gmail.com',

        	'password' => bcrypt('123456')
            'username' => 'nilesh_44',
            'lastname' => 'Jadhav',
            'firstname' => 'Nilesh',

        ]);

  

        $role = Role::create(['name' => 'Admin']);

   

        $permissions = Permission::pluck('id','id')->all();

  

        $role->syncPermissions($permissions);

   

        $user->assignRole([$role->id]);

    }
}
