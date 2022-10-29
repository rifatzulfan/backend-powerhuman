<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Company;
use App\Models\Employee;
use App\Models\Responsibility;
use App\Models\Role;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        // // // \App\Models\User::factory()->create([
        // // //     'name' => 'Test User',
        // // //     'email' => 'test@example.com',
        // // // ]);

        Company::factory(10)->create();
        Role::factory(15)->create();
        Responsibility::factory(20)->create();
        Team::factory(5)->create();
        Employee::factory(50)->create();
    }
}
