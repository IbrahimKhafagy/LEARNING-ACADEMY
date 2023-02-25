<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    //haas many courses
    public function courses(){
        return $this->hasmany(course::class);
    }
}

