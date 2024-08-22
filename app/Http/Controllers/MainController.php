<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\JobDetails;
use App\Models\Position;
use App\Models\PostJobs;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
        return view('pages.jobs', compact('jobPosting'));
    }
    
    // Display Contact Page Function
    public function contact() {
        return view('pages.contact-us');
    }

    // Display Login Page Function
    public function login() {
        return view('auth.login');
    }

    // Login Function
    public function log(Request $request) {
        $request -> validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:12'
        ]);

        $user = Admin::where('email', '=', $request -> email) -> first();
        if($user) {
            if(Hash::check($request -> password, $user -> password)) {
                $request -> session() -> put('loginId', $user -> id);
                return redirect('/dashboard');
            } else {
                return back() -> with('fail', 'Incorrect Credentials!!');
            } 
        } else {
            return back() -> with('fail', 'You do not access to this portal!!');
        }
    }

        public function logout() {
        $data = array();
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('/login');
            }
        }

    // Display Apply page Function
    public function apply($id) {
        $jobDesc = PostJobs::find($id);
        return view('pages.apply', compact('jobDesc'));
    }

    // Display Dashboard Function
    public function dashboard() {
        $applicants = JobDetails::all() -> count();
        $positions = Position::all() -> count();
        $jobPosted = PostJobs::all() -> count();
        $applicantsRejected = JobDetails::where('status', 'Rejected') -> count();
        $applicantsAccepted = JobDetails::where('status', 'Accepted') -> count();
        return view('dashboard.dashboard', compact('applicants', 'positions', 'jobPosted', 'applicantsRejected', 'applicantsAccepted'));
    }

    // Display Applicants Page Function
    public function applicant() {
        $applicants = JobDetails::all();
        return view('pages.applicants', compact('applicants'));
    }

    // Display View Applicants Function
    public function applicants($id) {
        $applicants = JobDetails::find($id);
        $position = Position::find($id);
        return view('pages.view-applicants', compact('applicants', 'position'));
    }

    // Display Job Posting Page Function
    public function jobPosting() {
        $position = Position::where('status', 'Available') -> get();
        $jobPosting = PostJobs::all();
        
        return view('pages.job-posting', compact('position', 'jobPosting'));
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

        $jobPosting -> job_title = $request -> input('job_title');
        $jobPosting -> job_type = $request -> input('job_type');
        $jobPosting -> job_description = $request -> input('job_description');
        $jobPosting -> key_responsibilities = $request -> input('key_responsibilities');
        $jobPosting -> education = $request -> input('education');
        $jobPosting -> position = $request -> input('position');
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
        $position = Position::all();
        return view('pages.position', compact('position'));
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

    // Reject Applicant Function
    public function rejectApplicant($id) {
        $reject = JobDetails::find($id);

        $reject -> status = "Rejected";

        $reject -> update();
        return redirect('/applicants');
    }

    public function download(Request $request, $id) {
        // if(Storage::disk('local') -> exists("applicants_docs/$request -> file")) {
        //     $path = Storage::disk('local') -> path("applicants_docs/$request -> file");
        //     $content = file_get_contents($path);
        //     return response($content) -> withHeaders([
        //         'content-Type' => mime_content_type($path)
        //     ]);
        // }
        dd('Ok');
    }
}
