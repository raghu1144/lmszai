<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';

    public $timestamps = true;

    protected $guarded = ['id'];

    protected $dates = ['created_at', 'updated_at','deleted_at'];
}
