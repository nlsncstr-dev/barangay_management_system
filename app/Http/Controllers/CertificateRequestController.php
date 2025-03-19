<?php

namespace App\Http\Controllers;

use App\Models\CertificateRequest;
use Illuminate\Http\Request;

class CertificateRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function viewCertificateRequest()
    {
        return view('services.certificate-request');
    }

    public function viewCertificateRequests()
    {
        return view('barangay.reports.certificate-requests');
    }

    public function createCertificateRequest(Request $request)
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
            'certificate_type' => 'required|string|max:255',
            'purpose' => 'nullable|string|max:255',
       
        ]);

        CertificateRequest::create($request->all());

        return redirect()->route('home');
    }
}
