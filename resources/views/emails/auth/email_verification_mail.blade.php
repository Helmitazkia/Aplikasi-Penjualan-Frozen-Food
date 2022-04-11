@component('mail::message')
Hello {{$user->name}} 
Thanks for registering in Baba Fresh Bogor Raya. 
In this case, you need to verify your email address to login to your account.
@component('mail::button', ['url' => route('verify_email',$user->email_verification_code)])
Click here to confirm your email
@endcomponent

<p>Or copy paste the following link on your web browser to verify your email address</p>
<p><a href="{{route('verify_email',$user->email_verification_code)}}">
    {{route('verify_email',$user->email_verification_code)}}</a></p>

Best Regards,<br>
{{ config('app.name') }}
@endcomponent