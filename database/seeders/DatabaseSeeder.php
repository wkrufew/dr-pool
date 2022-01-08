<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('services');
        Storage::makeDirectory('services');

        $this->call(PermissionSeeder::class);

        $this->call(RoleSeeder::class); 
        
        $this->call(UserSeeder::class); 
        
        $this->call(CategorySeeder::class);

        $this->call(ServiceSeeder::class);

        

    }
}
