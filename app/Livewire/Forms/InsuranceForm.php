<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Rules\ValidIban;
use Livewire\Attributes\Validate;
use Illuminate\Validation\ValidationException;

class InsuranceForm extends Form
{
    #[Validate('required', message: 'Bedrijfsnaam is verplicht')]
    public $companyName;

    #[Validate('required', message: 'Rechtsvorm is verplicht')]
    public $legalForm;

    #[Validate]
    public $iban;

    #[Validate('required', message: 'Straat is verplicht')]
    public $street;

    #[Validate('required', message: 'Huisnummer is verplicht')]
    #[Validate('regex:/^[1-9]+$/', message: 'Vul een geldig huisnummer in (zonder toevoeging)')]
    public $houseNumber;

    #[Validate('required', message: 'Postcode is verplicht')]
    #[Validate('regex:/^[1-9][0-9]{3} [A-Z]{2}$/', message: 'Vul een geldige postcode in (1234 AB)')]
    public $postalCode;

    #[Validate('required', message: 'Woonplaats is verplicht')]
    public $city;

    #[Validate('required', message: 'E-mail is verplicht')]
    #[Validate('email', message: 'Vul een geldig e-mailadres in')]
    public $email;

    #[Validate('email', message: 'Vul een geldig e-mailadres in')]
    public $financeEmail;

    /**
     * Rules
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'iban' => ['required', new ValidIban],
        ];
    }

    public function messages()
    {
        return [
            'iban.required' => __('IBAN is verplicht'),
        ];
    }
}
