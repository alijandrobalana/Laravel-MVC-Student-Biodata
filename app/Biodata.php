<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
   protected $fillable = ['studentno','firstname','middlename','lastname','course','address',
    'gender','number'];
}
