<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SideContent;

class SiteContents extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // SideContent::create ([
        //     "name"=>"banner",
        //     "content"=>json_encode([
        //         "title"=>"EVERY CHILD YEARNS TO LEARN",
        //         "sub_title"=>"Making Your Childs World Better",
        //         "desc"=>"Replenish seasons may male hath fruit beast were seas saw you arrie said man beast whales his void unto last session for bite. Set have great you'll male grass yielding yielding man",
        //     ]),
        // ]);


        // SideContent::create ([
        //     "name"=>"courses",
        //     "content"=>json_encode([
        //         "title"=>"POPULAR COURSES",
        //         "sub_title"=>"Special Courses",
        //     ]),
        // ]);



        SideContent::create ([
            "name"=>"test",
            "content"=>json_encode([
                "title"=>"TESIMONIALS",
                "sub_title"=>"Happy Students",
            ]),
        ]);



        }


    }
