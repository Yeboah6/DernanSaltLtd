<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SendMailController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MainController::class, 'home']) -> name('home');

Route::get('/about-us', [MainController::class, 'about']) -> name('about');

Route::get('/jobs', [MainController::class, 'job']) -> name('jobs');

Route::get('/contact', [MainController::class, 'contact']) -> name('contact');

Route::get('/login', [MainController::class, 'login']) -> name('login');
Route::post('/login', [MainController::class, 'log']) -> name('login');


// Route::get('/logout', [MainController::class, 'logout']) -> name('logout');
Route::get('/dashboard', [MainController::class, 'dashboard']) -> name('dashboard');

Route::get('/job-apply/{id}', [MainController::class, 'apply']) -> name('job-apply');
// });


Route::get('/applicants', [MainController::class, 'applicant']) -> name('applicants');
Route::get('/applicants/{id}', [MainController::class, 'applicants']) -> name('applicants');
Route::get('/applicants-reject/{id}', [MainController::class, 'rejectApplicant']) -> name('applicants-reject');

Route::get('/positions', [MainController::class, 'position']) -> name('position');
Route::post('/positions', [MainController::class, 'positions']) -> name('position');
Route::get('/positions/{id}', [MainController::class, 'deletePos']) -> name('positions');
Route::get('/positions-show/{id}', [MainController::class, 'showPos']) -> name('positions-show');


Route::get('/job-posting', [MainController::class, 'jobPosting']) -> name('job-posting');
Route::post('/job-posting', [MainController::class, 'jobPostings']) -> name('job-posting');

Route::get('/job-posting/{id}', [MainController::class, 'jobPostingsView']) -> name('job-posting');
Route::get('/job-posting/{id}', [MainController::class, 'jobPostingHide']) -> name('job-posting');
Route::get('/job-posting-show/{id}', [MainController::class, 'jobPostingShow']) -> name('job-posting');

Route::get('/job-description/{id}', [MainController::class, 'jobDesc']) -> name('job-description');


Route::get('/send/mail/{id}', [SendMailController::class, 'send_mail']) -> name('send_mail');
// Route::get('/send/mail/', [SendMailController::class, 'send_mail']) -> name('send_mail');

Route::get('/download/{id}', [MainController::class, 'download']) -> name('download');

Route::get('/sales', [MainController::class, 'sales']) -> name('sales');

Route::get('/marketing', [MainController::class, 'marketing']) -> name('marketing');

Route::get('/applicant-sign-up', [MainController::class, 'signup']) -> name('applicant-sign-up');