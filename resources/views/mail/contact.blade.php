@component('mail::message')
Contact {{$contactInfo['name']}} contacted you.
Contact email is {{$contactInfo['email']}}.
Contact subject is {{$contactInfo['subject']}}.
Contact message is:
{{$contactInfo['message']}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
