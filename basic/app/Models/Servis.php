<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servis extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'servis1_title',
        'servis1_contain',
        'servis2_title',
        'servis2_contain',
        'servis3_title',
        'servis3_contain',
        'servis4_title',
        'servis4_contain',
        'servis5_title',
        'servis5_contain',
        'servis6_title',
        'servis6_contain',
       
    ];
}
