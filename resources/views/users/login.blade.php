@extends('layout.app')

@section('title', 'Login')

<div class="flex items-center justify-center min-h-screen">
    <div class="scroller flex flex-col bg-[rgba(215,192,158,0.8)] shadow-[0_5px_15px_rgba(0,0,0,0.35)] p-10 gap-10 sm:w-[600px] sm:max-w-screen-xl mx-auto rounded-md">
        <h2 class="text-center text-xl font-bold">Login</h2>
        <form method="POST" action="{{ route('login.submit') }}" class="auth-form flex flex-col gap-3">
            @csrf
            <input type="text" name="email" placeholder="email" value="{{ old('email') }}" required class="bg-transparent border border-black/50 text-lg placeholder:font-bold placeholder:text-black/50 border-[4px] p-1 outline-none">
            <input type="password" name="password" placeholder="Password" required class="bg-transparent border border-black/50 text-lg placeholder:font-bold placeholder:text-black/50 border-[4px] p-1">
            <button type="submit" class="bg-[#205C78] text-white p-2 rounded hover:bg-[#4994A4] outline-none">Login</button>
            <a href="{{ route('register.form') }}" class="text-[#C81E27] text-center">Don't have an account? Sign Up</a>
        </form>
    </div>
</div>