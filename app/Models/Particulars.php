<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Particulars extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'appointment_request_id',
        'first_name',
        'middle_name',
        'last_name',
    ];

    public function appointmentRequest()
    {
        return $this->belongsTo(AppointmentRequest::class);
    }

}
