<?php

// app/Models/Registration.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    // Define the table name if it's not the plural of the model name
    protected $table = 'registrations';

    // Specify the attributes that are mass assignable
    protected $fillable = [
        'pobox',
        'email',
        'name',
        'last_name',
        'mob_no',
        'ofice_no',
        'id_pass',
        'country',
        'province',
        'city',
        'company',
        'del_address',
        'password'
    ];

    // Optionally, you can define any attribute casting or relationships if needed
}
