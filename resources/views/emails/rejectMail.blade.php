<x-mail::message>
# 

<img src="../assets/images/Asset4@4x.png" alt="Dernan Salt">

<h3 style="font-size: 20px;color:#fff;">Dear {{ $rejected['first_name'] }} {{ $rejected['middle_name'] }} {{ $rejected['last_name'] }}</h3>
<hr>
<p>Thank you for your interest in the {{ $rejected['position'] }} role at Dernan Salt Limited and for taking the time to apply.
    We appreciate the effort and enthusiasm you put into your application. 
<br>
    After careful consideration and review of all candidates, we regret to inform you that we have decided to move forward with another applicant whose qualifications and experience more closely align with the requirements of the position.
<br>
    Please know that this decision was not easy, given the high caliber of applicants we had for this role. We encourage you to apply for future opportunities with Dernan Salt Limited that match your skills and experience.
<br>
    We wish you the best of luck in your job search and future professional endeavors. Thank you once again for considering Dernan Salt Limited as a potential employer.
<hr>
</p>

                
<p>Best regards,</p>  
<p>Human Resource Manager</p>
{{ config('app.name') }}
</x-mail::message>
