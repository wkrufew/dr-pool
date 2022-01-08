<?php

namespace Database\Seeders;

use App\Models\Goal;
use App\Models\Image;
use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = Service::factory(20)->create();

        foreach ($services as $service) {
            Image::factory(1)->create([
                'imageable_id' => $service->id,
                'imageable_type' => 'App\Models\Service'
            ]);

            Goal::factory(4)->create([
                'service_id' => $service->id
            ]);
        }
    }
}
