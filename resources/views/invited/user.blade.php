@component('mail::message')
# Registration process

Hello,
As you may have been informed you were due to be registered onto the exam management platform,
follow the link below and complete the registration.Make sure to remember your credentials as they shall be
the ones used for logging in.

@component('mail::button', ['url' => $link ])
Complete your registration
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
