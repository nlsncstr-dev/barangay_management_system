@extends('layout.app')

@section('title', 'Register')

<div class="flex items-center justify-center min-h-screen">
    <div class="scroller flex flex-col bg-[rgba(215,192,158,0.9)] shadow-[0_5px_15px_rgba(0,0,0,0.35)] p-10 gap-10 sm:w-[600px] sm:max-w-screen-xl mx-auto rounded-md">
        <h2 class="text-center text-xl font-bold">Sign Up</h2>
        <form method="POST" action="{{ route('register.submit') }}" class="auth-form flex flex-col gap-3">
            @csrf
            <input type="text" name="first_name" placeholder="First Name" value="{{ old('first_name') }}" required class="bg-transparent border border-black/50 text-lg placeholder:font-bold placeholder:text-black/50 border-[4px] p-1 outline-none">
            <input type="text" name="middle_name" placeholder="Middle Name (Optional)" value="{{ old('middle_name') }}" class="bg-transparent border border-black/50 text-lg placeholder:font-bold placeholder:text-black/50 border-[4px] p-1 outline-none">
            <input type="text" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}" required class="bg-transparent border border-black/50 text-lg placeholder:font-bold placeholder:text-black/50 border-[4px] p-1 outline-none">
            <input type="text" name="username" placeholder="Username" value="{{ old('username') }}" required class="bg-transparent border border-black/50 text-lg placeholder:font-bold placeholder:text-black/50 border-[4px] p-1 outline-none">
            <input type="text" name="contact_number" placeholder="Contact Number" value="{{ old('contact_number') }}" required class="bg-transparent border border-black/50 text-lg placeholder:font-bold placeholder:text-black/50 border-[4px] p-1 outline-none">
            <input type="password" name="password" placeholder="Password" required class="bg-transparent border border-black/50 text-lg placeholder:font-bold placeholder:text-black/50 border-[4px] p-1 outline-none">
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required class="bg-transparent border border-black/50 text-lg placeholder:font-bold placeholder:text-black/50 border-[4px] p-1 outline-none">
            <button type="submit" class="bg-[#205C78] text-white p-2 rounded hover:bg-[#4994A4]">Register</button>
            <a href="{{ route('login.form') }}" class="text-[#C81E27] text-center">Already have an account? Login</a>
        </form>

   
    </div>
</div>







