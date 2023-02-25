<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
      $data['contact'] = Setting::select("name","address","city","phone","work_hour","map","email")->first();
      return view('front.contact.index')->with($data);
    }
}