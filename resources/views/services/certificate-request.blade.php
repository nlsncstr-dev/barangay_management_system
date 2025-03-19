@extends('layout.app')

@section('title', 'Certificate Request')

@section('content')
<div class="rounded-md gap-10 font-mono font-bold text-black/80 z-0 text-center p-6 sm:flex sm:justify-center sm:items-center h-100vh backdrop-blur-[10px]">
    <div class="scroller flex flex-col bg-[rgba(215,192,158,0.7)] shadow-[0_5px_15px_rgba(0,0,0,0.35)] p-10 gap-10 sm:w-[600px] sm:max-w-screen-xl mx-auto rounded-md">
        <h1 class="text-2xl">Certificate Request Form</h1>
        <form method="POST" action="{{route('create.certificate-request')}}" class="auth-form">
            @csrf
            <div class="flex flex-col gap-10">
                
                <div class="flex flex-col gap-5">
                    <h2 class=" border-gray-500 border-b-2 text-md">Basic Information</h2>
                    <input class="bg-transparent border border-black/50 text-lg placeholder:font-bold placeholder:text-black/50 border-[4px] p-1" type="text" name="first_name" placeholder="First Name" value="{{ old('first_name') }}" required>
                    <input class="bg-transparent border border-black/50 text-lg placeholder:font-bold placeholder:text-black/50 border-[4px] p-1" type="text" name="middle_name" placeholder="Middle Name (Optional)" value="{{ old('middle_name') }}">
                    <input class="bg-transparent border border-black/50 text-lg placeholder:font-bold placeholder:text-black/50 border-[4px] p-1" type="text" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}" required>
                    <input class="bg-transparent border border-black/50 text-lg placeholder:font-bold placeholder:text-black/50 border-[4px] p-1" type="text" name="contact_number" placeholder="Contact Number" value="{{ old('contact_number') }}" required>
                    <input class="bg-transparent border border-black/50 text-lg placeholder:font-bold placeholder:text-black/50 border-[4px] p-1" type="text" name="address" placeholder="Address" value="{{ old('address') }}" required>
                    <div class="relative inline-block">
                        <select 
                        name="gender" 
                        class="bg-transparent border border-black/50 text-lg font-bold text-black/50 border-[4px] p-2 pr-10 appearance-none w-full"
                        >
                            <option value="" disabled selected hidden>Gender</option>
                            <option value="male" class="bg-[rgba(215,192,158,0.5)]">Male</option>
                            <option value="female" class="bg-[rgba(215,192,158,0.5)]">Female</option>
                            <option value="others" class="bg-[rgba(215,192,158,0.5)]">Others</option>
                        </select>
                    
                        <span class="absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-black/50">
                            ▼
                        </span>
                    </div>
                    <div class="relative inline-block">
                        <select name="citizenship" class="bg-transparent border border-black/50 text-lg font-bold text-black/50 border-[4px] p-2 pr-10 appearance-none w-full">
                            <option value="" disabled selected hidden>Citizenship</option>
                            <option value="filipino" class="bg-[rgba(215,192,158,0.5)]">Filipino</option>
                            <option value="others" class="bg-[rgba(215,192,158,0.5)]">Others</option>
                        </select>
                        
                        <span class="absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-black/50">
                            ▼
                        </span>
                    </div>
                    
                    <div class="relative inline-block">
                        <select name="civil_status" class="bg-transparent border border-black/50 text-lg font-bold text-black/50 border-[4px] p-2 pr-10 appearance-none w-full">
                            <option value="" disabled selected hidden>Civil Status</option>
                            <option value="single" class="bg-[rgba(215,192,158,0.5)]">Single</option>
                            <option value="married" class="bg-[rgba(215,192,158,0.5)]">Married</option>
                            <option value="widowed" class="bg-[rgba(215,192,158,0.5)]">Widowed</option>
                            <option value="separated" class="bg-[rgba(215,192,158,0.5)]">Separated</option>
                        </select>
                        
                        <span class="absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-black/50">
                            ▼
                        </span>
                    </div>
                </div>
                <div class="flex flex-col gap-5">
                    <h2 class="border-gray-500 border-b-2 text-md">Additional Information</h2>
                    <div class="relative inline-block">
                        <select name="certificate_type" class="bg-transparent border border-black/50 text-lg font-bold text-black/50 border-[4px] p-2 pr-10 appearance-none w-full">
                            <option value="" disabled selected hidden>Types of Certificate</option>
                            <option value="barangay_clearance" class="bg-[rgba(215,192,158,0.5)]">Barangay Clearance</option>
                            <option value="barangay_certificate" class="bg-[rgba(215,192,158,0.5)]">Barangay Certificate</option>
                            <option value="business_clearance" class="bg-[rgba(215,192,158,0.5)]">Business Clearance</option>
                            <option value="residency_certificate" class="bg-[rgba(215,192,158,0.5)]">Residency Certificate</option>
                            <option value="indigency_certificate" class="bg-[rgba(215,192,158,0.5)]">Indigency Certificate</option>
                        </select>
                        
                        <span class="absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-black/50">
                            ▼
                        </span>
                    </div>
                    
                    <input class="bg-transparent border border-black/50 text-lg placeholder:font-bold placeholder:text-black/50 border-[4px] p-1" type="text" name="purpose" placeholder="Purpose (Optional)" value="{{ old('purpose') }}">
                </div>
                <div class="flex flex-col gap-5">
                    <h2 class="border-gray-500 border-b-2 text-md">Identification Document If Any</h2>
                    <input class="bg-transparent border border-black/50 text-lg font-bold text-black/50 border-[4px] p-1" type="file" name="supporting_documents" >
                </div>
            <button class="text-2xl border border-[4px] border-black/50 hover:bg-black/50 hover:text-white hover:text-white">Submit</button>

            </div>
        </form>

   
    </div>
      
</div>
@endsection

