<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Records extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = ['firstname', 'lastname', 'email', 'city', 'animals'];
}
