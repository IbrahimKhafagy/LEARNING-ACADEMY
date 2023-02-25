<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i=1; $i<=3; $i++){
            for($j=1 ;$j<=6; $j++){
                Course::create([

                    "category_id"=>$i,
                    "trainer_id" =>rand(1,5),
                    "name" => "course num $j categ num $i",
                    "small_desc" =>"Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
                    "desc"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
                    "price"=>rand(1000,4000),
                    "image"=>"$i$j.png"


                ]);
        }
        }
        }

}
