<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CertificateRequest extends Model
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
        'certificate_type',
        'purpose',
    ];
}
