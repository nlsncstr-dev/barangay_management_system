<?php

namespace App\Http\Controllers;

use App\Models\AppointmentRequest;
use Illuminate\Http\Request;

class AppointmentRequestController extends Controller
{
    public function viewAppointmentRequest()
    {
        return view('services.appointment-request');
    }

    public function createAppointmentRequest(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'contact_number' => 'required|numeric|digits:11',
            'address' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'citizenship' => 'required|string|max:255',
            'civil_status' => 'required|string|max:255',
       
        ]);

        AppointmentRequest::create($request->all());

        return redirect()->route('home');
    }

}
