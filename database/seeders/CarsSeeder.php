<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Database\Factories;
use App\Models\Car;




use Illuminate\Support\Facades\DB;


class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cars')->insert([
            'description' => Str::random(50),
            'model' => Str::random(10),
            'produced_on' => Carbon::parse('01-01-2024'),
            'image' => 'car1.jpg',
        ]);
        
        Car::factory()
        ->count(10)
        ->create();
    }
};