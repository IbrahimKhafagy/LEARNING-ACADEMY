<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;
    protected $guarded =['id'];

// trainer hasmany courses

    public function courses(){
        return $this->hasmany(course::class);
    }

}
