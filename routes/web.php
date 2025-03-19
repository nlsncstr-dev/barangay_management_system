<?php

use App\Http\Controllers\AppointmentRequestController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CertificateRequestController;
use App\Livewire\CertificateRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return Auth::check() ? redirect()->route('barangay') : view('welcome');
})->name('home');



//residents
Route::middleware('guest')->group(function () {
    // barangay
    Route::get('/services/certificate-request', [CertificateRequestController::class, 'viewCertificateRequest'])->name('view.certificate-request');
    Route::post('/services/certificate-request/create', [CertificateRequestController::class, 'createCertificateRequest'])->name('create.certificate-request');

    Route::get('/services/appointment-request', [AppointmentRequestController::class, 'viewAppointmentRequest'])->name('view.appointment-request');
    Route::post('/services/appointment-request/create', [AppointmentRequestController::class, 'createAppointmentRequest'])->name('create.appointment-request');

    // login
    Route::get('/barangay/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
    Route::post('barangay/register', [AuthController::class, 'register'])->name('register.submit');
    Route::get('/barangay/login', [AuthController::class, 'showLoginForm'])->name('login.form');
    Route::post('barangay/login', [AuthController::class, 'login'])->name('login.submit');
  
});



//barangay officials
Route::middleware('auth')->group(function () {
    Route::get('/barangay', function () {
        return view('barangay.reports.dashboard-reports');
    })->name('barangay');

    Route::get('/barangay/certificate-requests', [CertificateRequestController::class, 'viewCertificateRequests'])->name('view.certificate-requests');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

});

Route::fallback(function () {
    return redirect()->route('home');
});