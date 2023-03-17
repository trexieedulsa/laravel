<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grades extends Model
{
    use HasFactory;
    protected $table = 'grades';

    protected $fillable = [
        'esNo',
        'sNo',
        'prelim',
        'midterm',
        'finals',
        'remarks',
    ];
}
