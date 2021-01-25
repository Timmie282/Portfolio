<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    use HasFactory;

    protected $fillable = [
        'pages_title', 'pages_format', 'pages_info', 'pages_img', 'pages_slug', 'pages_nav'
    ];
}
