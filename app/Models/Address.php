<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    public $table = 'addresses';
    protected $fillable = ['warehouse_id', 'street', 'city', 'state', 'country', 'postal_code','Telefono'];

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }

    public function deliveries()
    {
        return $this->hasMany(Delivery::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'country');
    }
}
