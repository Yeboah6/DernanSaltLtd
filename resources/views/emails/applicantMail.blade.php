<x-mail::message>
# Interview Invitation for {{$accepted['position']}} at Dernan Salt Limited

<h3>Dear {{ $rejected['first_name'] }} {{ $rejected['middle_name'] }} {{ $rejected['last_name'] }}</h3>

<p>We are pleased to inform you that your application for the {{$accepted['position']}} position at Dernan Salt Limited has been reviewed, 
    and you have been selected to proceed to the interview phase of our recruitment process. </p>
    
    <p>Please reply to this email to confirm your availability and schedule your interview.</p>
    
    <p>On the day of your interview, kindly bring the following documents:</p>
    <ul>
        <li>- A valid passport picture</li>
        <li>- Updated resume/CV</li>
        <li>- Copies of your educational certificates</li>
        <li>- Any relevant professional certifications</li>
    </ul>
    
    
    <p>We look forward to discussing your qualifications in more detail.</p>
    
    <p>Thank you for your interest in joining our team.</p>
    
   <p>Best regards,</p>  
   <p>Human Resource Manager</p>

{{-- Thanks,<br> --}}
{{ config('app.name') }}
</x-mail::message>


{{-- 

<body>
    <div class="container">
        
        <div class="message">
            <p>Dear,</p>
            <p>We are pleased to inform you that your application for the [Position Name] position at Dernan Salt Limited has been reviewed, 
                and you have been selected to proceed to the interview phase of our recruitment process. </p>
                
                <p>Please reply to this email to confirm your availability and schedule your interview.</p>
                
                <p>On the day of your interview, kindly bring the following documents:</p>
                <ul>
                    <li>- A valid passport picture</li>
                    <li>- Updated resume/CV</li>
                    <li>- Copies of your educational certificates</li>
                    <li>- Any relevant professional certifications</li>
                </ul>
                
                
                <p>We look forward to discussing your qualifications in more detail.</p>
                
                <p>Thank you for your interest in joining our team.</p>
                
               <p>Best regards,</p>  
               <p>Human Resource Manager</p>
                <p>Dernan Salt Limited</p>
        </div>
        
    </div>
</body>

</html> --}}





