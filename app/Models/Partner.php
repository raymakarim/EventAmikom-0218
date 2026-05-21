<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    // Mass Assignment: Mengizinkan kolom ini diisi secara massal
    protected $fillable = ['name', 'logo', 'link'];
}