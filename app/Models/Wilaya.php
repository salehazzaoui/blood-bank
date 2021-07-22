<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wilaya extends Model
{
    use HasFactory;

    protected $fillabel =[
        'name',
        'arbic_name',
        'latitude',
        'longitude'
    ];
}
