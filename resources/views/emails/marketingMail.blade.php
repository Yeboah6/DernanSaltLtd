
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Template</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .email-container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border: 1px solid #dddddd;
            padding: 20px;
        }
        .header {
            text-align: center;
            background-color: #4CAF50;
            color: white;
            padding: 10px 0;
            font-size: 24px;
        }
        .logo-image {
            width: 100%;
            max-width: 150px;
            margin: 20px auto;
            display: block;
        }
        .content {
            padding: 20px;
            color: #333333;
            line-height: 1.6;
        }
        .button {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            margin-top: 20px;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }
        .footer {
            text-align: center;
            padding: 10px 0;
            color: #777777;
            font-size: 12px;
        }
        .footer a {
            color: #4CAF50;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Logo Image -->
        {{-- <img src="../assets/images/Asset4@4x.png" style="width:4.5em" alt=""> --}}
        <img src="https://github.com/Yeboah6/DernanSaltLtd/blob/main/public/assets/images/Asset4@4x.png" alt="Company Logo" class="logo-image">
        
        <div class="header">
            Your Company Name
        </div>
        <div class="content">
            <h2>Hello, [Recipient's Name]</h2>
            <p>
                We are reaching out to you regarding [subject of the email]. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Nulla condimentum lacus nec velit faucibus, at dignissim eros facilisis.
            </p>
            <p>
                If you have any questions, please do not hesitate to <a href="mailto:support@yourcompany.com">contact us</a>.
            </p>
            <a href="https://yourcompany.com" class="button">Visit Our Website</a>
        </div>
        <div class="footer">
            <p>&copy; 2024 Your Company Name. All rights reserved.</p>
            <p><a href="#">Unsubscribe</a></p>
        </div>
    </div>
</body>
</html>



{{-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Template</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .email-container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border: 1px solid #dddddd;
            padding: 20px;
        }
        .header {
            text-align: center;
            background-color: #4CAF50;
            color: white;
            padding: 10px 0;
            font-size: 24px;
        }
        .content {
            padding: 20px;
            color: #333333;
            line-height: 1.6;
        }
        .button {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            margin-top: 20px;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }
        .footer {
            text-align: center;
            padding: 10px 0;
            color: #777777;
            font-size: 12px;
        }
        .footer a {
            color: #4CAF50;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            Your Company Name
        </div>
        <div class="content">
            <h2>Hello, {{ $data['name'] }}</h2>
            <p>
                We are reaching out to you regarding {{ $data['subject'] }}. {{ $data['message'] }}
            </p>
            <p>
                If you have any questions, please do not hesitate to <a href="mailto:support@yourcompany.com">{{ $data['email'] }}</a>.
            </p>
            <a href="https://yourcompany.com" class="button">Visit Our Website</a>
        </div>
        <div class="footer">
            <p>&copy; 2024 Your Company Name. All rights reserved.</p>
            <p><a href="#">Unsubscribe</a></p>
        </div>
    </div>
</body>
</html> --}}



{{-- <x-mail::message>
# Hello, you have a new mail!

<h3>Name: {{ $data['name'] }}</h3>
<h3>Email: {{ $data['email'] }}</h3>
<h3>Subject: {{ $data['subject'] }}</h3>
<h3>Message: {{ $data['message'] }}</h3>

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message> --}}
