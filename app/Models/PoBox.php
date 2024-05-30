<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoBox extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'pobox_no'];
}
