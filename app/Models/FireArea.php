<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FireArea extends Model
{
    use HasFactory;

    // Kolom yang dapat diisi (fillable)
    protected $fillable = ['name', 'description', 'risk_level'];
}

