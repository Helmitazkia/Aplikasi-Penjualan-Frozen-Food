<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAdmin extends Model
{
    use HasFactory;

    protected $fillable = [
        //Nama Database Tabel User
        'name',
        'email',
        'password',
        'image',
    ];
}
