<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailUser extends Model
{
    use HasFactory, SoftDeletes;
    // this field must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    //declare fillable
    protected $fillable = [
        'user_id',
        'type_user_id',
        'contact',
        'address',
        'gender',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
