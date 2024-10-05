<x-mail::message>

<img src="../assets/images/Asset4@4x.png" alt="Dernan Salt">

<h3>Dear {{ $applicant -> first_name }} {{ $applicant -> middle_name }} {{ $applicant -> last_name }}</h3>
<hr>
<p>We are pleased to inform you that your application for the {{$applicant-> position}} position at Dernan Salt Limited has been reviewed, 
    and you have been selected to proceed to the interview phase of our recruitment process. 
<br>
    Please reply to this email to confirm your availability and schedule your interview.
<br><br><hr>
    On the day of your interview, kindly bring the following documents:
<br><br>
    - A valid passport picture
<br>
    - Updated resume/CV
<br>
    - Copies of your educational certificates
<br>
    - Any relevant professional certifications
<br><br>
<hr>
    We look forward to discussing your qualifications in more detail.
<br>
    Thank you for your interest in joining our team.
</p>
    
<p>Best regards,</p>  
<p>Human Resource Manager</p>
{{ config('app.name') }}
</x-mail::message>





