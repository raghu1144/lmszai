<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $table = 'contents';

    public $timestamps = true;

    protected $guarded = ['id'];

    protected $dates = ['created_at', 'updated_at','deleted_at'];
}
