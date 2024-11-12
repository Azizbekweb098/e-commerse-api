<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
 
    public function run()
    {
        $admin = User::create([
            'first_name' => 'Kailey', 
            'last_name' => 'Torphy',
            'email' => 'emily79@example.org',  // emailga qiymat qo'shish
            'phone' => '1-701-656-3327', 
            'password' => bcrypt('password'),
        ]);
        

        $admin->roles()->attach(1);

        User::factory()->count(10)->hasAttached(Role::find(2))->create();
        
    }
}
