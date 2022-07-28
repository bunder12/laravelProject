<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Freebet extends Model
{
    use HasFactory;
    protected $table = 'freebets';
    protected $guarded = ['id'];
}
