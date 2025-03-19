@extends('layout.app')

@section('title', 'Barangay Requests')

@section('content')


<div class="min-h-screen bg-[rgba(215,192,158,0.7)] overflow-hidden flex flex-row">

   @include('components.sidebar')

   @livewire('certificate-requests')
     
</div>
@endsection

   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
  