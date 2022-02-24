<?php

namespace Database\Seeders;
use \Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    /*
    public function run()
    {
        // \App\Models\User::factory(10)->create();
    /*
        DB::table('users')->insert([
            [
        'name' => 'Rohit Tembhurnikar',
        'username' => 'admin',
        'email' => 'admin@gmail.com',
        'password' => bcrypt('admin123'),
        'lastname' => 'Tembhurnikar',
        'firstname' => 'Rohit',
        'role'=>'Admin',
            ]
            ]);   
            */
            public function run()

            {
        
                $user = User::create([
        
                    'name' => 'Rohit Tembhurnikar', 
        
                    'email' => 'rohittembhu5555@gmail.com',
        
                    'password' => bcrypt('123456'),
                    'username' => 'rohit_55',
                    'lastname' => 'Rohit',
                    'firstname' => 'Tembhurnikar',
                     'role' => 'admin',
                ]);
        
          
        
                $role = Role::create(['name' => 'admin']);
        
           
        
                $permissions = Permission::pluck('id','id')->all();
        
          
        
                $role->syncPermissions($permissions);
        
           
        
                $user->assignRole([$role->id]);
        
            }
    }
    


