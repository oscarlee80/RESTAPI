@component('mail::message')
Hello {{$user->name}}

You need to verify your new email

@component('mail::button', ['url' => route('verify', $user->verification_token)])
Verify Account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
