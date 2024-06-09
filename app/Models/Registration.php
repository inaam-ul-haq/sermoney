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
        'user_id',
        'pobox',
        'mob_no',
        'office_no',
        'id_pass',
        'country',
        'province',
        'city',
        'company',
        'del_address',
        'password',
        'refrence',
        'news_platform',
        'username'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // Optionally, you can define any attribute casting or relationships if needed
}
