<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{

    public $timestamps = true;
    protected $fillable = [
        'name',
        'contact',
        'email',
    ];

    use SoftDeletes;


    protected $dates = ['deleted_at'];

}
