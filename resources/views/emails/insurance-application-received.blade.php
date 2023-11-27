<x-mail::message>
# Hoi ACME,

Je hebt een nieuwe verzekeringsaanvraag ontvangen. Hieronder vind je de gegevens van de aanvrager.

@component('mail::table')
|  |  |
| ---- | ------ |
@foreach($form->toArray() as $key => $value)
    | {{ __($key) }} | {{ $value }} |
@endforeach
@endcomponent
</x-mail::message>
