<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modalidade extends Model
{
    use HasFactory;

    protected $table = 'modalidades';

    protected $fillable = [
        'modalidades',
        'image',
        
    ];
}
