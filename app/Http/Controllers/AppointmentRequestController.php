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
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'age' => 'required|numeric|',
            'contact_number' => 'required|numeric|digits:11',
            'address' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'citizenship' => 'required|string|max:255',
            'civil_status' => 'required|string|max:255',
        ]);

        $validatedData['reference_number'] = $this->generateUniqueReferenceNumber();
        $appointmentRequest = AppointmentRequest::create($validatedData);

         // Save family members if any
         if ($request->has('family_members')) {
            foreach ($request->family_members as $member) {
                if (!isset($member['first_name'], $member['last_name'])) continue; // skip invalid
        
                $appointmentRequest->familyMembers()->create([
                    'appointment_request_id' => $appointmentRequest->id,
                    'first_name' => $member['first_name'],
                    'middle_name' => $member['middle_name'] ?? null,
                    'last_name'  => $member['last_name'],
                ]);
            }
        }
        

        return redirect()->route('home')->with('success', 'Your reference number is #'. $appointmentRequest->reference_number);
    }
        private function generateUniqueReferenceNumber()
        {
            do {
                $referenceNumber = mt_rand(1000, 9999); 
            } while (AppointmentRequest::where('reference_number', $referenceNumber)->exists());
        
            return $referenceNumber;
        }
    

}
