<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
         $user=User::factory()->create([
             'name' => 'sam',
             'email' => 'sam@email.com',
             'password'=>'sam123'
         ]);
         $role=Role::create(['name'=>'doctor']);
         $user->assignRole($role);
    }
}
