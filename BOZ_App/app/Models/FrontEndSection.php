<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrontEndSection extends Model
{
    use HasFactory;

    protected $fillable = ['number', 'header', 'content', 'language', 'page'];
}
