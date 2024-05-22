<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personas extends Model
{
    use HasFactory;

    protected $table = 'personas';
    protected $fillable = ['nombre', 'apellido', 'email', 'edad'];

}
