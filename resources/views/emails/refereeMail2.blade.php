<x-mail::message>

<img src="../assets/images/Asset4@4x.png" alt="Dernan Salt">

<p>Dear {{$applicant -> referee_name2}},</p>
<p>I hope you are doing well. {{$applicant -> first_name}} {{$applicant -> middle_name}} {{$applicant -> last_name}} has applied for a position with our organization and has listed you as a reference. 
    We would greatly appreciate your providing a brief recommendation letter to support their application. </p>

<x-mail::button :url="'http://127.0.0.1:8000/referee-testimony'">
Testify
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
