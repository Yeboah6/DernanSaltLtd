<?php

namespace App\Http\Controllers;

use App\Mail\ApplicantMail;
use App\Mail\ContactUs;
use App\Mail\MarketingMail;
use App\Mail\RefereeMail;
use App\Mail\RejectMail;
use App\Mail\SalesMail;
use App\Mail\VerifyEmail;
use App\Models\ApplicantLogins;
use App\Models\Admin;
use App\Models\JobDetails;
use App\Models\Position;
use App\Models\PostJobs;
use App\Models\RefereeTestimony;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    // Dislpay Home Page Function
    public function home() {
        return view('pages.index');
    }

    // Dislpay About Page Function
    public function about() {
        return view('pages.about-us');
    }

    // Display Jobs Page Function
    public function job() {
        $jobPosting = PostJobs::where('status', 'Available') -> get();
        $positionNames = Position::all();

        return view('pages.jobs', compact('positionNames', 'jobPosting'));
    }
    
    // Display Contact Page Function
    public function contact() {
        return view('pages.contact-us');
    }

    // Send Contact Us Email Message Function
    public function send() {
        $data = request() -> validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required|min:5'
        ]);
        Mail::to('yeboahs324@gmail.com') -> send(new ContactUs($data));

        return redirect() -> back() -> with('success', 'Message sent successfully');
    }

    // Sending Rejected Email Function
    public function reject_send_mail($id) {
        $rejected = JobDetails::find($id);

        Mail::to($rejected -> email) -> send(new RejectMail($rejected));

        $rejected -> status = "Rejected";
        $rejected -> update();

        return redirect('/admin-dashboard');
    }

    // Sending Accept Email Function
    public function accept_send_mail($id) {
        $accepted = JobDetails::find($id);

        Mail::to($accepted -> email) -> send(new ApplicantMail($accepted));
        Mail::to($accepted -> referee_email) -> send(new RefereeMail($accepted));
        Mail::to($accepted -> referee_email2) -> send(new RefereeMail($accepted));

        $accepted -> status = "Accepted";
        $accepted -> update();

        return redirect('/admin-dashboard');
    }

    // Sending Referee Email Function
    public function referee_send_mail($id) {
        $referral = JobDetails::find($id);

        Mail::to($referral -> referee_email);
        return redirect('/admin-dashboard');
    }

    // Display Login Page Function
    public function adminlogin() {
        return view('auth.admin-login');
    }

    // Admin Login Function 
    public function log(Request $request) {
        $request -> validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:12'
        ]);

        $user = Admin::where('email', '=', $request -> email) -> first();
        if($user) {
            if(Hash::check($request -> password, $user -> password)) {
                $request -> session() -> put('loginId', $user -> id);
                return redirect('/admin-dashboard');
            } else {
                return back() -> with('fail', 'Incorrect Credentials!!');
            } 
        } else {
            return back() -> with('fail', 'You do not access to this portal!!');
        }
    }

    // Admin Logout Function
    public function logout() {
        if(Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('/admin-login');
        }
    }

    // Display Apply page Function
    public function apply() {
        $data = array();
        if(Session::has('loginId')) {
            $data = ApplicantLogins::where('id', '=', Session::get('loginId')) -> first();
        }
        return view('pages.apply', compact('data'));
    }

      // Display Apply page Function
      public function jobApply() {
        return view('pages.job-form');
    }

    // Display Dashboard Function
    public function admindashboard() {

        $data = array();
        if(Session::has('loginId')) {
            $data = Admin::where('id', '=', Session::get('loginId')) -> first();
        }

        // $applicants = StepOne::all() -> count();
        $positions = Position::all() -> count();
        $jobPosted = PostJobs::all() -> count();
        // $applicantsRejected = StepSeven::where('status', 'Rejected') -> count();
        // $applicantsAccepted = StepSeven::where('status', 'Accepted') -> count();
        return view('dashboard.admin-dashboard', compact('data', 'positions', 'jobPosted'));
    }

    // Display Applicants Page Function
    public function applicant() {
        $data = array();
        if(Session::has('loginId')) {
            $data = Admin::where('id', '=', Session::get('loginId')) -> first();
        }
        // $applicantStepOne = StepOne::all();
        // $applicantStepTwo = StepTwo::all();
        // $applicantStepSeven = StepSeven::all();
        $position = Position::all();
        return view('pages.applicants', compact('position', 'data'));
    }

    // Display View Applicants Function
    public function applicants($id) {
        $data = array();
        if(Session::has('loginId')) {
            $data = Admin::where('id', '=', Session::get('loginId')) -> first();
        }
        // $position = Position::find($id);
        return view('pages.view-applicants', compact( 'data',));
    }

    // Display Job Posting Page Function
    public function jobPosting() {
        $data = array();
        if(Session::has('loginId')) {
            $data = Admin::where('id', '=', Session::get('loginId')) -> first();
        }
        $position = Position::where('status', 'Available') -> get();
        $jobPosting = PostJobs::all();
        $positionNames = Position::all();
        
        return view('pages.job-posting', compact('position', 'jobPosting', 'positionNames', 'data'));
    }

    // Hide Jobs Function
    public function jobPostingHide($id) {
        $hide = PostJobs::find($id);

        $hide -> status = "Unavailable";
        $hide -> update();
        return redirect('/job-posting');
    }

    // Show Jobs Function
    public function jobPostingShow($id) {
        $hide = PostJobs::find($id);

        $hide -> status = "Available";
        $hide -> update();
        return redirect('/job-posting');
    }

    public function editPostJosted($id) {
        $edit = PostJobs::findOrFail($id);
        return view('pages.job-posting', compact('edit'));
    }

    // Adding Job Posting Function
    public function jobPostings(Request $request) {

        $jobPosting = new PostJobs();

        $character = 'JID';
        $pin = mt_rand(10, 99) . mt_rand(10, 99);
        $job_id = $character. '' .$pin;

        $jobPosting -> job_id = $job_id;
        $jobPosting -> job_title = $request -> input('job_title');
        $jobPosting -> job_type = $request -> input('job_type');
        $jobPosting -> job_description = $request -> input('job_description');
        $jobPosting -> education = $request -> input('education');
        $jobPosting -> position_id = $request -> input('position');
        $jobPosting -> experience = $request -> input('experience');
        $jobPosting -> personal_attributes = $request -> input('personal_attributes');
        $jobPosting -> skills_competencies = $request -> input('skills_competencies');
        $jobPosting -> deadline = $request -> input('deadline');
        $jobPosting -> status = "Available";

        $jobPosting -> save();

        return redirect('/job-posting');
    }

    // Dislpay View Job Page Function
    public function jobPostingsView($id) {
        $data = array();
        if(Session::has('loginId')) {
            $data = Admin::where('id', '=', Session::get('loginId')) -> first();
        }
        $jobDesc = PostJobs::findOrFail($id);
        return view('pages.view-job', compact('jobDesc', 'data'));
    }

    // Display Position Page Function
    public function position() {
        $data = array();
        if(Session::has('loginId')) {
            $data = Admin::where('id', '=', Session::get('loginId')) -> first();
        }

        $position = Position::all();
        return view('pages.position', compact('position', 'data'));
    }

    // public function jobPostingsEdit($id) {
    //     $postingEdit = PostJobs::findOrFail($id);
    //     return view('pages.job-posting', compact('postingEdit'));
    // }

    // Adding Position Function
    public function positions(Request $request) {
        $position = new Position();

        $position -> position = $request -> input('position');
        $position -> status = "Available";

        $position -> save();
        return redirect('/positions');
    }

    // Delete Position Function
    public function deletePos($id) {
        $position = Position::findOrFail($id);

        $position -> status = "Unavailable";

        $position -> update();
        return redirect('/positions');
    }

    // Show Position Function
    public function showPos($id) {
        $show = Position::find($id);

        $show -> status = "Available";

        $show -> update();
        return redirect('/positions');
    }

    // Display Job Description Page Function
    public function jobDesc($id) {
        // $position = Position::find($id);
        $jobDesc = PostJobs::find($id);
        return view('pages.job-description', compact('jobDesc'));
    }

    // Download Document Function
    public function download($file) {
        return response()->download(storage_path('/storage/app/applicants_docs/'. $file));
 
        // if(Storage::disk('local') -> exists("applicants_docs/".$request -> file)) {
        //     $path = Storage::disk('local') -> path("applicants_docs/".$request -> file);
        //     $content = file_get_contents($path);
        //     return response($content) -> withHeaders([
        //         'content-Type' => mime_content_type($path)
        //     ]);
        // }
        // dd('Ok');
    }

    // Display Sales Page Function
    public function sales() {
        return view('pages.sales');
    }

    // Display Marketing Page Function
    public function marketing() {
        return view('pages.marketing');
    }

    // Send Sales Email Message Function
    public function sendSales() {
        $data = request() -> validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'subject' => 'required|min:5|max:25',
            'message' => 'required|min:5'
        ]);
        Mail::to('yeboahs324@gmail.com') -> send(new SalesMail($data));

        return redirect() -> back() -> with('success', 'Message sent successfully');
    }


    // Send Marketing Email Message Function
    public function sendMarketing() {
        $data = request() -> validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required|min:5'
        ]);
        Mail::to('yeboahs324@gmail.com') -> send(new MarketingMail($data));

        return redirect() -> back() -> with('success', 'Message sent successfully');
    }

    // Display Choose Account Page Function
    public function chooseAccount($id) {
        $jobDesc = PostJobs::find($id);
        return view('pages.choose-account', compact('jobDesc'));
    }

    // Display Applicant Login Page Function
    public function Applicantlogin() {
        return view('auth.applicant-login');
    }

    // Applicant Login Function
    public function postApplicantlogin(Request $request) {
        $request -> validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:12'
        ]);

        $applicant = ApplicantLogins::where('email', '=', $request -> email) -> first();
        if($applicant) {
            if(Hash::check($request -> password, $applicant -> password)) {
                $request -> session() -> put('loginId', $applicant -> id);
                return redirect('/personal-info');
            } else {
                return back() -> with('fail', 'Incorrect Credentials!!');
            } 
        } else {
            return back() -> with('fail', 'You do not access to this portal!!');
        }
    }

    // Display Applicant Sign Up Page Function
    public function signup($id) {
        $jobPosted = PostJobs::findOrFail($id);
        return view('auth.applicant-sign-up', compact('jobPosted'));
    }

    // Store Applicant SignUp Function
    public function storeSignUp(Request $request) {

        // $character = 'ID';
        // $pin = mt_rand(10, 99) . mt_rand(10, 99);
        // $applicant_id = $character. '' .$pin;

        // $applicant = request() -> validate([
        //     'first_name' => 'required',
        //     'last_name' => 'required',
        //     'email' => 'required|email|unique:applicant_logins'
        // ]);

        // ApplicantLogins::insert($applicant);

        $applicant = new ApplicantLogins();
        $applicant -> first_name = $request -> input('first_name');
        $applicant -> last_name = $request -> input('last_name');
        $applicant -> email = $request -> input('email');
        $applicant -> position = $request -> input('position');

        $applicant -> save();

        Mail::to($request -> input('email')) -> send(new VerifyEmail($applicant));
        return redirect() -> back() -> with('success', 'Verification link has been sent your email');
    }

    // Applicant Logout Function
    // public function applicantlogout() {
    //         if(Session::has('loginId')) {
    //             Session::pull('loginId');
    //         return redirect('/applicant-login');
    //     }
    // }

    // Display Verify Account Page Function
    public function verifyEmail() {
        return view('emails.verify-email');
    }


    // Store Verify Account Function
    public function postVerifyEmail(Request $request) {
        $request -> validate([
            'email' => 'required|email',
            'confirm_password' => 'required|min:8|max:12',
            'password' => 'required|min:8|max:12'
        ]);

        $applicant = ApplicantLogins::where('email', '=', $request -> email) -> first();
        if($applicant) {
            if ($request -> confirm_password == $request -> password) {
          $applicant -> password = Hash::make($request -> input('password'));
            $applicant -> update(['verified_at' => now()]);
            return redirect('/applicant-login');
            } else {
                return back() -> with('fail', "Passwords don't match!!");
            }
        } else {
            return back() -> with('fail', 'Incorrect Credentials!!');
        }
    }

    // Display Referee Testimony Page Function
    public function refereeTestimony() {
        return view('pages.referee-testimony');
    }

    // Post Referee Testimony Function
    public function postRefereeTestimony(Request $request) {
        $referee = new RefereeTestimony();

        $referee -> job_details_id = 1234;
        $referee -> testimony = $request -> input('testimony');

        if($request -> hasFile('doc')) {
            $file = $request -> file('doc');
            $extension = $file -> getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file -> move('uploads/refereeDocuments', $filename);
            $referee -> document = $filename;
        }
        // = time().'.'.$request -> file('doc') -> getClientOriginalExtension();
        $referee -> save();
        return redirect() -> back();
    }

    // public function Form() {
    //     return view('multiStepForm.step-one-job-form'); 
    // }

    // public function Form(Request $request) {
    //     // $data = array();
    //     // if(Session::has('loginId')) {
    //     //     $data = ApplicantLogins::where('id', '=', Session::get('loginId')) -> first();
    //     // }

    //     return view('form.step-one-job-form');
    // }

    // public function save(Request $request)
    // {
        // Validate the request data
        // $request->validate([
        //     'applicant_id' => 'string',
        //     'first_name' => 'required|string|max:255',
        //     'middle_name' => 'string|max:255',
        //     'last_name' => 'required|string|max:255',
        //     'dob' => 'nullable|string|max:255',
        //     'gender' => 'required|string',
        //     'nationality' => 'nullable|string',
        //     'address' => 'nullable|string|max:255',
        //     'number' => 'nullable|string|max:255',
        //     'email' => 'required|email:job_details',

        //     'current_employer' => 'nullable|string|max:255',
        //     'company_name' => 'nullable|string|max:255',
        //     'company_address' => 'nullable|string|max:255',
        //     'position_held' => 'nullable|string|max:255',
        //     'duration_of_employment_from' => 'nullable|string|max:255',
        //     'duration_of_employment_to' => 'nullable|string|max:255',
        //     'responsilibities' => 'nullable|string|max:255',

        //     'image' => 'nullable|file|mimes:jpg,png,pdf|max:2048',
        //     'cv' => 'nullable|file|mimes:doc,docx,pdf|max:2048',
        //     'cerificates_acquired' => 'nullable|file|mimes:doc,docx,pdf|max:2048',
        //     'cover_letter' => 'nullable|file|mimes:doc,docx,pdf|max:2048',
        //     'other_relevant_doc' => 'nullable|file|mimes:doc,docx,pdf|max:2048',

        //     'agreement' => 'nullable|string|max:255',
        //     'signature' => 'nullable|string|max:255',
        //     'date' => 'nullable|string|max:255',

        //     'status' => 'Submitted',
        // ]);

            // $applicant = new JobDetails();

            // $applicant -> applicant_id = $request -> input('applicant_id');
            // $applicant -> first_name = $request -> input('first_name');
            // $applicant -> middle_name = $request -> input('middle_name');
            // $applicant -> last_name = $request -> input('last_name');
            // $applicant -> dob = $request -> input('dob');
            // $applicant -> gender = $request -> input('gender');
            // $applicant -> nationality = $request -> input('nationality');
            // $applicant -> address = $request -> input('address');
            // $applicant -> number = $request -> input('number');
            // $applicant -> email = $request -> input('email');

        // if($request -> hasFile('image')) {
        //     $file = $request -> file('image');
        //     $extension = $file -> getClientOriginalExtension();
        //     $filename = time().'.'.$extension;
        //     $file -> move('uploads/applicant-images/', $filename);
        //     $applicant -> image = $filename;
        // }

        // if($request -> hasfile('cv')) {
        //     $file = $request -> file('cv');
        //     $extension = $file -> getClientOriginalExtension();
        //     $filename = time().'.'.$extension;
        //     $file -> move('uploads/applicant-documents/', $filename);
        //     $applicant -> cv = $filename;
        // }

        // if($request -> hasfile('cerificates_acquired')) {
        //     $file = $request -> file('cerificates_acquired');
        //     $extension = $file -> getClientOriginalExtension();
        //     $filename = time().'.'.$extension;
        //     $file -> move('uploads/applicant-documents/', $filename);
        //     $applicant -> cerificates_acquired = $filename;
        // }

        // }
        // Handle file uploads
        // if ($request->hasFile('image')) {
        //     if ($applicant->image) {
        //         Storage::delete($applicant->image);
        //     }
        //     $applicant->image = $request->file('image')->store('uploads/applicant-images');
        // }

        // if ($request->hasFile('cv')) {
        //     if ($applicant->cv) {
        //         Storage::delete($applicant->cv);
        //     }
        //     $applicant->cv = $request->file('cv')->store('uploads/applicant-documents');
        // }

        // if ($request->hasFile('cerificates_acquired')) {
        //     if ($applicant->cerificates_acquired) {
        //         Storage::delete($applicant->cerificates_acquired);
        //     }
        //     $applicant->cerificates_acquired = $request->file('cerificates_acquired')->store('uploads/applicant-documents');
        // }

         // Save data to the database
        //  $applicant->fill($request->except(['image', 'cv', 'cerificates_acquired', 'cover_letter','other_relevant_doc']));
        // $request->session()->put('id', $applicant->id);
        // dd(Session(['user_id', ]));
        // $request->session()->put('user_id', $applicant->id);
        // Session::flash('id', $applicant->id);
        // $applicant->save();
 
         // Store the user ID in the session
        //  $request->session()->put('user_id', $applicant->id);
 
         // Redirect back to the form with a success message
        //  return redirect()->back()->with('success', 'Data saved successfully! You can continue later.');
    // }

}
