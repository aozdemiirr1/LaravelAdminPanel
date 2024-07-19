<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yazilar extends Model
{
    use HasFactory;

    protected $table = 'yazilar';
    protected $fillable = ['title', 'content', 'image'];
}
