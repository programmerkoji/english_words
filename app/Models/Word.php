<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    use HasFactory;

    protected $fillable = [
        'word_en',
        'word_ja',
        'part_of_speech',
        'comprehension',
        'memo',
    ];
}
