<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

class Employer extends Model
{
    use HasFactory;

    public function job(){

        return $this->hasMany(Job::class);
    }
}