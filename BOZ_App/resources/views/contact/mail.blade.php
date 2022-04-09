@component('mail::message')

{{ucwords($contact->fullname)}} heeft een bericht achtergelaten.

Bericht:
{{$contact->message}}


@component('mail::button', ['url' => route('contact.show', ["contact" => $contact->id])])
Bekijk in de app
@endcomponent

Groetjes,<br>
{{ config('app.name') }}
@endcomponent
