<?php

namespace App\Models\Learner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Learner extends Model
{
    use HasFactory;

    
    protected $table = 'learners';

    public $timestamps = true;

    protected $guarded = ['id'];

    protected $dates = ['created_at', 'updated_at','deleted_at'];
}
