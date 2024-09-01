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

        $applicants = JobDetails::all() -> count();
        $positions = Position::all() -> count();
        $jobPosted = PostJobs::all() -> count();
        $applicantsRejected = JobDetails::where('status', 'Rejected') -> count();
        $applicantsAccepted = JobDetails::where('status', 'Accepted') -> count();
        return view('dashboard.admin-dashboard', compact('applicants', 'positions', 'jobPosted', 'applicantsRejected', 'applicantsAccepted', 'data'));
    }

    // Display Applicants Page Function
    public function applicant() {
        $data = array();
        if(Session::has('loginId')) {
            $data = Admin::where('id', '=', Session::get('loginId')) -> first();
        }
        $applicants = JobDetails::all();
        return view('pages.applicants', compact('applicants', 'data'));
    }

    // Display View Applicants Function
    public function applicants($id) {
        $data = array();
        if(Session::has('loginId')) {
            $data = Admin::where('id', '=', Session::get('loginId')) -> first();
        }
        $applicants = JobDetails::find($id);
        $position = Position::find($id);
        return view('pages.view-applicants', compact('applicants', 'position', 'data'));
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
        $jobDesc = PostJobs::findOrFail($id);
        return view('pages.view-job', compact('jobDesc'));
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
                return redirect('/job-apply');
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

        $character = 'ID';
        $pin = mt_rand(10, 99) . mt_rand(10, 99);
        $applicant_id = $character. '' .$pin;

        // $applicant = request() -> validate([
        //     'first_name' => 'required',
        //     'last_name' => 'required',
        //     'email' => 'required|email|unique:applicant_logins'
        // ]);

        // ApplicantLogins::insert($applicant);

        $applicant = new ApplicantLogins();  
        $applicant -> applicant_id = $applicant_id;
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
            $applicant -> update();
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
}
