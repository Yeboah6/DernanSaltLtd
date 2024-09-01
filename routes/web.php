<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MultiStepForm;
use App\Http\Controllers\SendMailController;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MainController::class, 'home']) -> name('home');

Route::get('/about-us', [MainController::class, 'about']) -> name('about');

Route::get('/jobs', [MainController::class, 'job']) -> name('jobs');

Route::get('/contact', [MainController::class, 'contact']) -> name('contact');

Route::get('/admin-login', [MainController::class, 'adminlogin']) -> name('admin-login');
Route::post('/admin-login', [MainController::class, 'log']) -> name('admin-login');

Route::get('/logout', [MainController::class, 'logout']) -> name('logout');

Route::get('/admin-dashboard', [MainController::class, 'admindashboard']) -> name('admin-dashboard') -> middleware('isLoggedIn');

Route::get('/job-apply', [MainController::class, 'apply']) -> name('job-apply');


Route::get('/job-form', [MainController::class, 'jobApply']) -> name('job-form');
// });


Route::get('/applicants', [MainController::class, 'applicant']) -> name('applicants') -> middleware('isLoggedIn');
Route::get('/applicants/{id}', [MainController::class, 'applicants']) -> name('applicants') -> middleware('isLoggedIn');
Route::get('/applicants-reject/{id}', [MainController::class, 'rejectApplicant']) -> name('applicants-reject') -> middleware('isLoggedIn');

Route::get('/positions', [MainController::class, 'position']) -> name('position') -> middleware('isLoggedIn');
Route::post('/positions', [MainController::class, 'positions']) -> name('position') -> middleware('isLoggedIn');
Route::get('/positions/{id}', [MainController::class, 'deletePos']) -> name('positions') -> middleware('isLoggedIn');
Route::get('/positions-show/{id}', [MainController::class, 'showPos']) -> name('positions-show') -> middleware('isLoggedIn');


Route::get('/job-posting', [MainController::class, 'jobPosting']) -> name('job-posting') -> middleware('isLoggedIn');
Route::post('/job-posting', [MainController::class, 'jobPostings']) -> name('job-posting') -> middleware('isLoggedIn');

Route::get('/job-posting/{id}', [MainController::class, 'jobPostingsView']) -> name('job-posting') -> middleware('isLoggedIn');
Route::get('/job-posting/{id}', [MainController::class, 'jobPostingHide']) -> name('job-posting') -> middleware('isLoggedIn');
Route::get('/job-posting-show/{id}', [MainController::class, 'jobPostingShow']) -> name('job-posting') -> middleware('isLoggedIn');

Route::get('/job-description/{id}', [MainController::class, 'jobDesc']) -> name('job-description');

// Sending Emails Routes
Route::get('/send/mail/{id}', [SendMailController::class, 'send_mail']) -> name('send_mail');
Route::get('/reject-send/mail/{id}', [MainController::class, 'reject_send_mail']) -> name('reject_send_mail');
Route::get('/accept-send/mail/{id}', [MainController::class, 'accept_send_mail']) -> name('accept_send_mail');

Route::get('/referee-send/mail/{id}', [MainController::class, 'referee_send_mail']) -> name('referee_send_mail');


Route::post('/contact', [MainController::class, 'send']) -> name('send');
Route::post('/marketing', [MainController::class, 'sendMarketing']) -> name('sendMarketing');
Route::post('/sales', [MainController::class, 'sendSales']) -> name('sendSales');

Route::get('/download/{file}', [MainController::class, 'download']) -> name('download');

Route::get('/sales', [MainController::class, 'sales']) -> name('sales');

Route::get('/marketing', [MainController::class, 'marketing']) -> name('marketing');

Route::get('/applicant-sign-up/{id}', [MainController::class, 'signup']) -> name('applicant-sign-up');
Route::get('/applicant-sign-up', [MainController::class, 'signup']) -> name('applicant-sign-up');
Route::post('/applicant-sign-up', [MainController::class, 'storeSignUp']) -> name('applicant-sign-up');

Route::get('/applicant-login', [MainController::class, 'Applicantlogin']) -> name('applicant-login');
Route::post('/applicant-login', [MainController::class, 'postApplicantlogin']) -> name('applicant-login');

// Route::get('/applicant-logut', [MainController::class, 'applicantlogout']) -> name('applicant-logut');

Route::get('/referee-testimony', [MainController::class, 'refereeTestimony']) -> name('referee-testimony');
Route::post('/referee-testimony', [MainController::class, 'postRefereeTestimony']) -> name('referee-testimony');



Route::get('/verify-email', [MainController::class, 'verifyEmail']) -> name('verify.email');
Route::post('/verify-email', [MainController::class, 'postVerifyEmail']) -> name('verify.email');

Route::get('/choose-account/{id}', [MainController::class, 'chooseAccount']) -> name('choose.account');




// Route::get('/apply/create-step-one', [MultiStepForm::class, 'createStepOne']) -> name('apply.create.step.one');
// Route::post('/apply/create-step-one', [MultiStepForm::class, 'postCreateStepOne']) -> name('apply.create.step.one');

// Route::get('/apply/create-step-two', [MultiStepForm::class, 'createStepTwo']) -> name('apply.create.step.two');
// Route::post('/apply/create-step-two', [MultiStepForm::class, 'postCreateStepTwo']) -> name('apply.create.step.two');


// Route::get('/apply/create-step-three', [MultiStepForm::class, 'createStepThree']) -> name('apply.create.step.three');
// Route::post('/apply/create-step-three', [MultiStepForm::class, 'postCreateStepThree']) -> name('apply.create.step.three');




