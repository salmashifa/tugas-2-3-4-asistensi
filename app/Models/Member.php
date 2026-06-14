<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'name',
        'nim',
        'role',
        'github_url',
        'photo',
        'bio',
    ];
}