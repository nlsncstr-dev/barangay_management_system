<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()->role === 'super_admin' && 
            $request->is('admin/certificate-requests*')) {
                return redirect()->route('filament.admin.pages.dashboard');

        }
        //clinic admin
        if (auth()->user()->role === 'clinic_admin' && 
        $request->is('admin/admin/users*')) {
            return redirect()->route('filament.admin.pages.dashboard');

        }
        if (auth()->user()->role === 'clinic_admin' && 
            $request->is('admin/certificate-requests*')) {
                return redirect()->route('filament.admin.pages.dashboard');

        }
        //barangay admin
        if (auth()->user()->role === 'barangay_admin' && 
        $request->is('admin/barangay/users*')) {
            return redirect()->route('filament.admin.pages.dashboard');

        }
        if (auth()->user()->role === 'barangay_admin' && 
            $request->is('admin/barangay/appointment-requests*')) {
                return redirect()->route('filament.admin.pages.dashboard');

        }
        //resident
        if (auth()->user()->role === 'resident' && 
        $request->is('admin/certificate-requests*')) {
            return redirect()->route('filament.admin.pages.dashboard');

        }
        if (auth()->user()->role === 'resident' && 
            $request->is('admin/appointment-requests*')) {
                return redirect()->route('filament.admin.pages.dashboard');

        }
        if (auth()->user()->role === 'resident' && 
            $request->is('admin/users*')) {
                return redirect()->route('filament.admin.pages.dashboard');

        }
     

        return $next($request);
    }
}
