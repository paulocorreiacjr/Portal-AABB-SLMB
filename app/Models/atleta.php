<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class atleta extends Model
{
    
    use HasFactory;
    
    protected $table = 'atletas';

    protected $fillable = [
        'name',
        'date',
        'team',
        'image',
    ];

}
