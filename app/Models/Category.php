<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Mass Assignment: kolom mana saja yang boleh diisi secara massal
    protected $fillable = ['name', 'slug'];
}