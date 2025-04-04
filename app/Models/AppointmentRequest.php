<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentRequest extends Model
{
    use HasFactory;
    
    protected $fillable = [ 
        'first_name',
        'middle_name',
        'last_name',
        'contact_number',
        'address',
        'gender',
        'citizenship',
        'civil_status',
        'status',
        'reference_number',
        'age',
    ];

    public function familyMembers()
    {
        return $this->hasMany(Particulars::class);
    }

}
