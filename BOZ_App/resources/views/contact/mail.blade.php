@component('mail::message')

{{ucwords($contact->fullname)}} heeft een bericht achtergelaten.
<br>
@if(isset($contact->page_location))
    {{ucwords($contact->fullname)}} komt van de pagina {{$contact->page_location}}.
@endif
<br>
Bericht:
{{$contact->message}}


@component('mail::button', ['url' => route('contact.show', ["contact" => $contact->id])])
Bekijk in de app
@endcomponent

Groetjes,<br>
{{ config('app.name') }}
@endcomponent
