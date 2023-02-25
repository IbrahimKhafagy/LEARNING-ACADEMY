<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\course;
use App\Models\SideContent;
use App\Models\Trainer;
use App\Models\Student;
use App\Models\Test;



class HomePageController extends Controller
{
    public function index(){

        $data['banner']= SideContent::select("name","content")->where("name","=","banner")->first();
        $data['course_title']= SideContent::select("name","content")->where("name","=","courses")->first();
        $data['test_title']= SideContent::select("name","content")->where("name","=","test")->first();

        $data['tests']= Test::select('name','spec','desc','image')->get();


        $data['courses']=course::select('id','name','small_desc','category_id','trainer_id','price','image')
         ->orderBy('id','desc')->take(3)->get();

        $data['courses_count'] =  course::count();
        $data['Trainers_count']=  Trainer::count();
        $data['Students_count']=  Student::count();



        return view('front.index')->with($data);
    }
}
