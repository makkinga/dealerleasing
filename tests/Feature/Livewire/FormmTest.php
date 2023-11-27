<?php

use App\Livewire\Form;
use Livewire\Livewire;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('renders successfully', function () {
    Livewire::test(Form::class)->assertStatus(200);
});

it('validates the required fields', function () {
    Livewire::test(Form::class)
        ->call('submit')
        ->assertHasErrors([
            'form.companyName',
            'form.legalForm',
            'form.iban',
            'form.street',
            'form.houseNumber',
            'form.postalCode',
            'form.city',
            'form.email',
            'form.financeEmail',
        ]);
});

it('validates the postal code format', function () {
    Livewire::test(Form::class)
        ->set('form.postalCode', '1234 AB')
        ->call('submit')
        ->assertHasNoErrors([
            'form.postalCode',
        ]);

    Livewire::test(Form::class)
        ->set('form.postalCode', '1234 ab')
        ->call('submit')
        ->assertHasErrors([
            'form.postalCode',
        ]);

    Livewire::test(Form::class)
        ->set('form.postalCode', '1234AB')
        ->call('submit')
        ->assertHasErrors([
            'form.postalCode',
        ]);
});

it('validates the housenumber', function () {
    Livewire::test(Form::class)
        ->set('form.houseNumber', '1')
        ->call('submit')
        ->assertHasNoErrors([
            'form.houseNumber',
        ]);

    Livewire::test(Form::class)
        ->set('form.houseNumber', '123')
        ->call('submit')
        ->assertHasNoErrors([
            'form.houseNumber',
        ]);

    Livewire::test(Form::class)
        ->set('form.houseNumber', '123A')
        ->call('submit')
        ->assertHasErrors([
            'form.houseNumber',
        ]);
});

it('validates the email fields', function () {
    Livewire::test(Form::class)
        ->set('form.email', 'invalid-email')
        ->set('form.financeEmail', 'invalid-email')
        ->call('submit')
        ->assertHasErrors([
            'form.email',
            'form.financeEmail',
        ]);
});

it('validates the iban field', function () {
    Livewire::test(Form::class)
        ->set('form.iban', 'invalid-iban')
        ->call('submit')
        ->assertHasErrors([
            'form.iban',
        ]);
});

it('submits the form', function () {
    $this->seed();

    Livewire::test(Form::class)
        ->set('form.companyName', 'Test Company')
        ->set('form.legalForm', 1)
        ->set('form.iban', 'NL91ABNA0417164300')
        ->set('form.street', 'Test Street')
        ->set('form.houseNumber', '1')
        ->set('form.postalCode', '1234 AB')
        ->set('form.city', 'Test City')
        ->set('form.email', 'j.doe@example.com')
        ->set('form.financeEmail', 'finance@example.com')
        ->call('submit')
        ->assertHasNoErrors()
        ->assertSee(__('Je aanvraag is succesvol verzonden!'));
});
