@extends('layout.app')

@section('title', 'Welcome Page')

@section('content')
@include('components.navbar')

<div class="p-5 backdrop-blur-[10px]">
    <div class="fade-in-top-delayed min-h-screen flex flex-col items-center justify-center p-10 bg-[rgba(215,192,158,0.7)] shadow-[0_5px_15px_rgba(0,0,0,0.35)] rounded-md gap-10 font-mono font-bold text-black/80 z-0">
        <div class="flex flex-col items-center text-center justify-center gap-5 lg:flex-row">
            <img class="w-80 h-80 object-cover " src="{{ asset('images/barangay_3.png') }}" alt="Picture of Barangay">
            <div class="flex flex-col gap-5">
                <h1 class="text-center font-bold text-3xl">Mission</h1>
                <p class="text-justify text-center">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p> 
            </div>
        </div>

        <div class="flex flex-col items-center text-center justify-center gap-5 lg:flex-row lg:flex-row-reverse">
            <img class="w-80 h-80 object-cover " src="{{ asset('images/barangay_2.png') }}" alt="Picture of Barangay">
            <div class="flex flex-col gap-5">
                <h1 class="text-center font-bold text-3xl">Vision</h1>
                <p class="text-justify text-center">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p> 
            </div>
        </div>
        <div class="flex flex-col items-center text-center justify-center gap-5 text-3xl w-full max-w-screen-xl mx-auto overflow-auto">
            <h1>Our Barangay</h1>
            <div class="flex flex-row space-x-5 justify-center overflow-x-auto">
                <img class="w-72 h-72 object-cover" src="{{ asset('images/barangay_3.png') }}" alt="Picture of Barangay">
                <img class="w-72 h-72 object-cover" src="{{ asset('images/barangay_4.png') }}" alt="Picture of Barangay">
                <img class="w-72 h-72 object-cover" src="{{ asset('images/barangay_5.png') }}" alt="Picture of Barangay">
            </div>
        </div>
        
        


        
    </div> 
    
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        @if(session('success'))
        Swal.fire({
            title: 'Success!',
            html: '<br><strong style="font-size: 24px; color: green;">{{ session("success") }}</strong>',
            icon: 'success',
            confirmButtonText: 'OK'
        });
        @endif
    });
</script>

@endsection
