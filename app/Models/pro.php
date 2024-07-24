<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pro extends Model
{
    use HasFactory;
    protected $table = 'pro';

    protected $fillable =['nom',
    'type',
    'image'];
}
