@component('mail::message')
# Introduction

{{ $contact->message }}

@component('mail::button', ['url' => $url])
Button
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent