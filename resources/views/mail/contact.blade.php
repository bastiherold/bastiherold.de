@component('mail::message')
# New Contact Form Message

Please click the link below to view your Message.

@component('mail::button', ['url' => $siteUrl])
View Message
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
