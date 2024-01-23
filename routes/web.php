<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/pay', function () {
    return view('pay');
});
Route::get("/log_in",function ()
{
    return view('log_in');
});
Route::get('/app', function () {
    return view('layouts.app');
});

Route::view('/services', 'services');

// waste to wealth protected routes

 Route::middleware(['auth','checksuperadmin'])->group(function () {

    Route::prefix('admin')->group(function () {

        Route::get('settings',App\Http\Livewire\Admins\Settings::class)->name('admin_settings');
        
        Route::get('/operationsreport',App\Http\Livewire\Admins\Operationreport::class)->name('admin_operations_report');
        
        Route::get('/patientBills',App\Http\Livewire\Admins\Bills::class)->name('patient_bills');
        
        Route::get('/departments',App\Http\Livewire\Admins\Departments::class)->name('departments');
        
        Route::get('/employees',App\Http\Livewire\Admins\Employees::class)->name('employees');
        
        Route::get('/appointment',App\Http\Livewire\Admins\Appiontment::class)->name('appointment');
        
        Route::get('all_user',App\Http\Livewire\Admins\Settings::class)->name('all_users');

        Route::get('/blocks',App\Http\Livewire\Admins\Blocks::class)->name('blocks');

        Route::get('/admin/requestedappointments',App\Http\Livewire\Admins\RequestedAppointments::class)->name('requestedAppointment');

        Route::get('/subscribers',App\Http\Livewire\Admins\Subscibers ::class)->name('subscibers');

        Route::get('/contactedus',App\Http\Livewire\Admins\Contactedus ::class)->name('contactedus');


    });
});

Auth::routes();
