<?php

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CalendarController;
use App\Http\Livewire\Blogs;
use App\Http\Livewire\SingleBlog;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

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
    return view('web.homepage');
});

Route::get('/about', function() {
    return view('web.about');
})->name('about');

Route::get('/services/fbm', function(){
    return view('web.fbm');
})->name('fbm');

Route::get('/services/fba', function(){
    return view('web.fba');
})->name('fba');

//Route::get('/booking', function(){
//    return view('web.booking');
//})->name('booking');


Route::get('logout', [\App\Http\Controllers\ProfileController::class, 'logout'])->name('logout');
Route::get('savo/login', [\App\Http\Controllers\ProfileController::class, 'login'])->name('admin.login');
Route::get('savo/register', [\App\Http\Controllers\ProfileController::class, 'register'])->name('admin.register');

Route::get('register', function () {
        abort(404);
})->name('register');

Route::get('login', function () {
    abort(404);
})->name('login');

Route::get('user-profile', function () {
    return view('admin.profile.prifile');
})->name('user_profile');



Route::get('booking', [\App\Http\Controllers\BookingController::class, 'index'])->name('booking');
Route::get('booking/details/{id}', [\App\Http\Controllers\BookingController::class, 'details'])->name('booking.details');
Route::post('booking/store', [\App\Http\Controllers\BookingController::class, 'store'])->name('booking.store');

Route::get('booking/callback', [\App\Http\Controllers\BookingController::class, 'callback'])->name('google.calendar.callback');
Route::get('booking/createEvent', [\App\Http\Controllers\BookingController::class, 'createEvent'])->name('google.calendar.create-event');

Route::post('booking/saveSelectedValue', [\App\Http\Controllers\BookingController::class, 'saveSelectedValue'])->name('saveSelectedValue');











Route::get('/contact-us', [BaseController::class, 'show'])->name('contact-us');

Route::post('/contact-us/submit' , [BaseController::class, 'contact'])->name('contact');

// Route::get('/blogs', function(){
//     return view('web.blog');
// })->name('blogs');

Route::get('/blogs/post/{id}', [BaseController::class, 'getBlog'])->name('web.blog-post');

Route::get('/blogs', Blogs::class)->name('blogs');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {


    Route::get('/dashboard', function () {

        $complete_appointment = \App\Models\Appointment::where('status',1)->count();
        $pending_appointment = \App\Models\Appointment::where('status',0)->count();
        $total_appointment = \App\Models\Appointment::count();

        return view('admin.dashboard',compact('complete_appointment','pending_appointment','total_appointment'));

    })->name('dashboard');








    Route::get('availability/index', [\App\Http\Controllers\AvailabilityController::class, 'index'])->name('availability.index');
    Route::get('availability/create', [\App\Http\Controllers\AvailabilityController::class, 'create'])->name('availability.create');
    Route::post('availability/store', [\App\Http\Controllers\AvailabilityController::class, 'store'])->name('availability.store');
    Route::get('availability/edit/{id}', [\App\Http\Controllers\AvailabilityController::class, 'edit'])->name('availability.edit');
    Route::get('availability/delete/{id}', [\App\Http\Controllers\AvailabilityController::class, 'destroy'])->name('availability.delete');
    Route::post('availability/update', [\App\Http\Controllers\AvailabilityController::class, 'update'])->name('availability.update');



    Route::get('appointment/index', [\App\Http\Controllers\AppointmentController::class, 'index'])->name('appointment.index');
    Route::get('appointment/create', [\App\Http\Controllers\AppointmentController::class, 'create'])->name('appointment.create');
    Route::post('appointment/store', [\App\Http\Controllers\AppointmentController::class, 'store'])->name('appointment.store');
    Route::get('appointment/edit/{id}', [\App\Http\Controllers\AppointmentController::class, 'edit'])->name('appointment.edit');
    Route::get('appointment/delete/{id}', [\App\Http\Controllers\AppointmentController::class, 'destroy'])->name('appointment.delete');
    Route::post('appointment/update', [\App\Http\Controllers\AppointmentController::class, 'update'])->name('appointment.update');

    Route::get('appointment/getSlots/{id}', [\App\Http\Controllers\AppointmentController::class, 'getSlots'])->name('appointment.getSlots');


});


Route::get('/language/{locale}', function (string $locale) {
    if (! in_array($locale, ['en', 'es'])) {
        abort(400);
    }
    App::setLocale($locale);
    Session::put('locale',$locale);
    return redirect(url(URL::previous()));

})->name('language');
