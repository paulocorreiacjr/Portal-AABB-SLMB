<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class torneio extends Model
{
    use HasFactory;

    protected $table = 'torneios';

    protected $fillable = [
        'modalidade',
        'date',
        'team',
        
    ]; 
}
