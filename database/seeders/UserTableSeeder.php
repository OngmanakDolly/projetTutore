<?php

namespace Database\Seeders;

use Hash;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('roles')->insert([
            'name' => "vacancier",
            'guard_name' => "web"
        ]);
        DB::table('roles')->insert([
            'name' => "organisme",
            'guard_name' => "web"
        ]);

        // for($i = 0; $i < 20; $i++)
        // {
            
        //    $user = DB::table('users')->insert([
        //         'name' => "Vacancier$i",
        //         'email' => "Vacancier$i@gmail.com",
        //         'username' => "VacaUser$i",
        //         'ville' => "yaoundé$i",
        //         'pays' => "cameroun$i",
        //         'role' => "1",
        //         'password' => bcrypt('0000')
        //     ]);

        //     $role = Role::find(1);
        //     $user->assignRole([$role->id]);
        // }

         
        
        // $user = User::create([
        //     'name' => 'Jitesh Meniya', 
        //     'email' => 'jiteshmeniya99@gmail.com',
        //     'username' => 'jit',
        //     'ville'=> 'yaoundé',
        //     'pays' => 'cameroun',
        //     'role' => "1",
        //     'password' => Hash::make('12345678')
        // ]);
         
        // $role = Role::find(1);
        // $user->assignRole([$role->id]);
        // $permissions = Permission::pluck('id', 'id')->all();
        // $role->syncPermissions($permissions);
    }
}
