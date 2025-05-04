<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    //
    protected $table = "student_table";

    protected $fillable = [
        'student_name',
        'age',
    ];
}
