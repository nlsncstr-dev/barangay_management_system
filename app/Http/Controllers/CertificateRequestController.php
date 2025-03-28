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
            'supporting_documents' => 'required|file|mimes:pdf,png,jpeg,jpg|max:30000',
        ]);
    
        if ($request->hasFile('supporting_documents')) {
            $file = $request->file('supporting_documents');
        
            $fileName = $file->getClientOriginalName();
        
            $filePath = $file->storeAs('supporting_documents', $fileName, 'public');
        } else {
            $filePath = null;
        }
        
        
    
        CertificateRequest::create([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'contact_number' => $request->contact_number,
            'address' => $request->address,
            'gender' => $request->gender,
            'citizenship' => $request->citizenship,
            'civil_status' => $request->civil_status,
            'certificate_type' => $request->certificate_type,
            'purpose' => $request->purpose,
            'supporting_documents' => $filePath, 
        ]);

        return redirect()->route('home');
    }
}
