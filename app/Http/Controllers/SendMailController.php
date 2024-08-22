<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

use App\Models\JobDetails;
use App\Models\PostJobs;

class SendMailController extends Controller
{

    public function send_mail($id) {

        $emailSubmit = JobDetails::find($id);
        $positionName = PostJobs::find($id);

        $data["email"] = $emailSubmit -> email;
        $data["title"] = " Interview Invitation for {$positionName -> position} at Dernan Salt Limited";

        $data2["email"] = $emailSubmit -> referee_email;
        $data2["title"] = "Request for Reference Letter for {$emailSubmit -> first_name}";

        $data3["email"] = $emailSubmit -> referee_email2;
        $data3["title"] = "Request for Reference Letter for {$emailSubmit -> first_name}";
        // $data["body"] = '';

        Mail::send('emails.applicantMail', $data, function($message) use($data) {
            $message -> to($data["email"])
                     -> subject($data["title"]);
        });

        Mail::send('emails.refereeMail', $data2, function($message) use($data2) {
            $message -> to($data2["email"])
                     -> subject($data2["title"]);
        });

        Mail::send('emails.refereeMail', $data3, function($message) use($data3) {
            $message -> to($data3["email"])
                     -> subject($data3["title"]);
        });

        $emailSubmit -> status = "Accepted";
        $emailSubmit -> update();

        return redirect() -> back();
    }
    
    // public function send_mail(Request $request) {
    //     $data["email"] = "ads21b00223y@ait.edu.gh";
    //     $data["title"] = " Interview Invitation for [Position Name] at Dernan Salt Limited";
    //     $data["body"] = "This is a test mail attachment";

    //     $files = [
    //         public_path('attachments/d.png'),
    //     ];

    //     Mail::send('emails.refereeMail', $data, function($message) use($data, $files) {
    //         $message -> to($data["email"])
    //                  -> subject($data["title"]);

    //         foreach ($files as $file) {
    //             $message -> attach($file);
    //         }
    //     });

    //     return redirect() -> back();
    // }
}
