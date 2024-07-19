<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menuler extends Model
{
    use HasFactory;

    protected $table = 'menuler';
    protected $fillable = ['menuname', 'downname', 'href'];
}
