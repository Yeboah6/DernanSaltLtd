<x-mail::message>

Thank you for registering for a Dernan Salt Ltd Account.
Your account has been created, you can sign in after you have activated your account.

<x-mail::button :url="'http://127.0.0.1:8000/verify-email'">
{{-- <x-mail::button :url="'https://dernansalt.com.gh/verify-email'"> --}}
Verify Account
</x-mail::button>

IMPORTANT:
This email and any of its attachments are intended solely for the use of the individual or entity to whom they are addressed. 
If you have received this message in error you must not print, copy, use or disclose the contents to anyone. 
Please also delete it from your system and inform the sender of the error immediately. 
Emails sent and received by Richmond and Wandsworth Councils are monitored and may be subsequently disclosed to authorised third parties, in accordance with relevant legislation.

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
