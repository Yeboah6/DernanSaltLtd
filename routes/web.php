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

Route::get('/admin-logout', [MainController::class, 'logout']) -> name('admin-logout');

Route::get('/admin-dashboard', [MainController::class, 'admindashboard']) -> name('admin-dashboard') -> middleware('isLoggedIn');

Route::get('/admin-profile', [MainController::class, 'adminProfile']) -> name('admin-profile') -> middleware('isLoggedIn');
Route::post('/admin-profile', [MainController::class, 'postAdminProfile']) -> name('admin-profile') -> middleware('isLoggedIn');

Route::get('/job-apply', [MainController::class, 'apply']) -> name('job-apply');


Route::get('/job-form', [MainController::class, 'jobApply']) -> name('job-form');


Route::get('/applicants', [MainController::class, 'applicant']) -> name('applicants') -> middleware('isLoggedIn');
Route::get('/applicants/{id}', [MainController::class, 'applicants']) -> name('applicants') -> middleware('isLoggedIn');
Route::get('/applicants-reject/{id}', [MainController::class, 'rejectApplicant']) -> name('applicants-reject') -> middleware('isLoggedIn');

Route::get('/positions', [MainController::class, 'position']) -> name('position') -> middleware('isLoggedIn');
Route::post('/positions', [MainController::class, 'positions']) -> name('position') -> middleware('isLoggedIn');
Route::get('/positions/{id}', [MainController::class, 'deletePos']) -> name('positions') -> middleware('isLoggedIn');
Route::get('/positions-show/{id}', [MainController::class, 'showPos']) -> name('positions-show') -> middleware('isLoggedIn');


Route::get('/job-posting', [MainController::class, 'jobPosting']) -> name('job-posting') -> middleware('isLoggedIn');
Route::post('/job-posting', [MainController::class, 'jobPostings']) -> name('job-posting') -> middleware('isLoggedIn');

Route::get('/job-posting-edit/{id}', [MainController::class, 'jobPostingEdit']) -> name('job-posting-edit') -> middleware('isLoggedIn');
Route::post('/job-posting-edit/{id}', [MainController::class, 'postJobPostingEdit']) -> name('post-job-posting-edit') -> middleware('isLoggedIn');


Route::get('/job-posted/{id}', [MainController::class, 'jobPostingsView']) -> name('job-posting') -> middleware('isLoggedIn');
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
// Route::get('/applicant-sign-up', [MainController::class, 'signup']) -> name('applicant-sign-up');
Route::post('/applicant-sign-up', [MainController::class, 'storeSignUp']) -> name('applicant-sign-up');

Route::get('/applicant-login', [MainController::class, 'Applicantlogin']) -> name('applicant-login');
Route::post('/applicant-login', [MainController::class, 'postApplicantlogin']) -> name('applicant-login');

Route::get('/applicant-logout', [MainController::class, 'applicantlogout']) -> name('applicant-logout');

Route::get('/referee-testimony', [MainController::class, 'refereeTestimony']) -> name('referee-testimony');
Route::post('/referee-testimony', [MainController::class, 'postRefereeTestimony']) -> name('referee-testimony');


Route::get('/reset-password', [MainController::class, 'resetPassword']) -> name('reset-password');
Route::post('/reset-password', [MainController::class, 'postResetPassword']) -> name('reset-password');

Route::get('/send-reset-password', [MainController::class, 'sendResetPassword']) -> name('send-reset-password');
Route::post('/send-reset-password', [MainController::class, 'postSendResetPassword']) -> name('send-reset-password');


Route::get('/verify-email', [MainController::class, 'verifyEmail']) -> name('verify.email');
Route::post('/verify-email', [MainController::class, 'postVerifyEmail']) -> name('verify.email');

Route::get('/choose-account/{id}', [MainController::class, 'chooseAccount']) -> name('choose.account');


// Route::get('/info', [MainController::class, 'info']) -> name('info');

Route::get('/personal-info', [MultiStepForm::class, 'personalInfo']) -> name('personal-info') -> middleware('applicantIsLoggedIn');
Route::post('/personal-info', [MultiStepForm::class, 'postPersonalInfo']) -> name('personal-info') -> middleware('applicantIsLoggedIn');

Route::post('/update-personal-info', [MultiStepForm::class, 'updatePersonalInfo']) -> name('update-personal-info');

Route::get('/work-experience', [MultiStepForm::class, 'workExperience']) -> name('work-experience') -> middleware('applicantIsLoggedIn');
Route::post('/work-experience', [MultiStepForm::class, 'postWorkExperience']) -> name('work-experience')-> middleware('applicantIsLoggedIn');

Route::post('/update-work-experience', [MultiStepForm::class, 'updateworkExperience']) -> name('update-work-experience');

Route::get('/education', [MultiStepForm::class, 'education']) -> name('education')-> middleware('applicantIsLoggedIn');
Route::post('/education', [MultiStepForm::class, 'postEducation']) -> name('education')-> middleware('applicantIsLoggedIn');

Route::post('/update-education', [MultiStepForm::class, 'updateEducation']) -> name('update-education');

Route::get('/referee', [MultiStepForm::class, 'referee']) -> name('referee')-> middleware('applicantIsLoggedIn');
Route::post('/referee', [MultiStepForm::class, 'postReferee']) -> name('referee')-> middleware('applicantIsLoggedIn');

Route::post('/update-referee', [MultiStepForm::class, 'updateReferee']) -> name('update-referee');

Route::get('/other-relevant', [MultiStepForm::class, 'otherRelevant']) -> name('other-relevant')-> middleware('applicantIsLoggedIn');
Route::post('/other-relevant', [MultiStepForm::class, 'postOtherRelevant']) -> name('other-relevant')-> middleware('applicantIsLoggedIn');

Route::post('/update-other-relevant', [MultiStepForm::class, 'updateOtherRelevant']) -> name('update-other-relevant');

Route::get('/upload-docs', [MultiStepForm::class, 'uploads']) -> name('uploads')-> middleware('applicantIsLoggedIn');
Route::post('/upload-docs', [MultiStepForm::class, 'postUploads']) -> name('uploads')-> middleware('applicantIsLoggedIn');

Route::post('/update-upload-docs', [MultiStepForm::class, 'updateUploads']) -> name('update-uploads');

Route::get('/agreement', [MultiStepForm::class, 'agreement']) -> name('agreement')-> middleware('applicantIsLoggedIn');
Route::post('/agreement', [MultiStepForm::class, 'postAgreement']) -> name('agreement')-> middleware('applicantIsLoggedIn');

Route::post('/update-agreement', [MultiStepForm::class, 'updateAgreement']) -> name('update-agreement');


Route::get('/preview-application', [MainController::class, 'previewApplication']) -> name('preview-application');
