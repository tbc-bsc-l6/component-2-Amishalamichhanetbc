<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cd extends Model
{
    use HasFactory;
    protected $table = 'cds';
    protected $primaryKey = 'id';
    protected $fillable = ['artist', 'title', 'durations','price']; 
}
