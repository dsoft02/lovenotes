<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoveNote extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'gender', 'age', 'message'];
}
