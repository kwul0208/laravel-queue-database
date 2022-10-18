<?php

namespace App\Jobs;

use App\Models\Person;
use Faker\Factory;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class PersonJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        
        $faker = Factory::create();
        $jum_data = 10000;

        for ($i=0; $i < $jum_data; $i++) { 
            Person::create([
                'name' => $faker->name(),
                'address' => $faker->address(),
                'desc' => $faker->name()
            ]);
        }
    }
}
