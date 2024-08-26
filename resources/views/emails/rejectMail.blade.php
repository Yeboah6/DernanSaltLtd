<x-mail::message>
# Your  Application for {{$rejected['number']}} at Dernan Salt Limited.

<h3>Dear {{ $rejected['first_name'] }} {{ $rejected['middle_name'] }} {{ $rejected['last_name'] }}</h3>
{{-- <h3>Email: {{ $data['email'] }}</h3> --}}
{{-- <h3></h3> --}}
<p>We are pleased to inform you that your application for the {{$rejected['number']}} position at Dernan Salt Limited has been reviewed, 
    and you have been REJECTED. </p>

{{-- <x-mail::button :url="''">
Button Text
</x-mail::button> --}}

<p>Thank you for your interest in joining our team.</p>
                
<p>Best regards,</p>  
<p>Human Resource Manager</p>
{{ config('app.name') }}
</x-mail::message>
