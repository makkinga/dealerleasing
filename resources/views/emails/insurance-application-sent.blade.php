<x-mail::message>
# Hoi {{ $form->companyName }},

Bedankt voor je aanvraag. We hebben je aanvraag in goede orde ontvangen en gaan er zo snel mogelijk mee aan de slag!

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam, commodi doloremque eaque eius enim est eveniet harum iste laboriosam maiores neque numquam odit porro quos repellat sint, sunt voluptas.

<x-mail::button :url="''">
Status bekijken
</x-mail::button>

## De door jou ingevulde gegevens:

@component('mail::table')
|  |  |
| ---- | ------ |
@foreach($form->toArray() as $key => $value)
| {{ __($key) }} | {{ $value }} |
@endforeach
@endcomponent

Groet,<br>
{{ config('app.name') }}
</x-mail::message>
