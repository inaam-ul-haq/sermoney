<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;
    protected $table='warehouses';

    protected $fillable=['name','type'];

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

}
