<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Word extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'word_en',
        'word_ja',
        'part_of_speech',
        'memory',
        'memo',
    ];
}
