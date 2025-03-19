<?php

namespace App\Livewire;

use App\Models\CertificateRequest;
use Livewire\Component;

class CertificateRequests extends Component
{
    public $certificateRequests;

    public function mount()
    {
        $this->certificateRequests = CertificateRequest::all();
    }

    public function delete($id)
    {
        $certificateRequest = CertificateRequest::find($id);

        if ($certificateRequest) {
            $certificateRequest->delete();
            // Refresh the list after deletion
            $this->certificateRequests = CertificateRequest::all();
        }
    }

    public function render()
    {
        return view('livewire.certificate-requests');
    }
}
