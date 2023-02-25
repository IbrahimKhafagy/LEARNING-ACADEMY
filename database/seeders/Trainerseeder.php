<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trainer;

class Trainerseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trainer::create([
            "name"=>"ibrahim",
            "phone"=>"01012345678",
            "spec"=>"web developer",
            "image"=>"1.png"
        ]);

        Trainer::create([
            "name"=>"ahmed",
            "phone"=>"0112545678",
            "spec"=>"engineer",
            "image"=>"2.png"
        ]);

        Trainer::create([
            "name"=>"mohamed",
            "phone"=>"0152879858",
            "spec"=>"doctor",
            "image"=>"3.png"
        ]);

        Trainer::create([
            "name"=>"mostafa",
            "phone"=>"0128568896",
            "spec"=>"artist",
            "image"=>"4.png"
        ]);


        Trainer::create([
            "name"=>"ramy",
            "phone"=>"0155788678",
            "spec"=>"web developer",
            "image"=>"5.png"
        ]);




    }




}
