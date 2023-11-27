<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\LegalForm;
use Illuminate\Contracts\View\View;
use App\Models\InsuranceApplication;
use Illuminate\Support\Facades\Mail;
use App\Livewire\Forms\InsuranceForm;
use App\Mail\InsuranceApplicationSent;
use Illuminate\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use App\Mail\InsuranceApplicationReceived;

class Form extends Component
{
    public InsuranceForm $form;
    public               $legalForms;

    /**
     * Mount
     *
     * @return void
     */
    public function mount(): void
    {
        $this->legalForms = LegalForm::all();
    }

    /**
     * Render
     *
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application|null
     */
    public function render()
    {
        return view('livewire.form');
    }

    /**
     * Updated
     *
     * @param $propertyName
     *
     * @return void
     * @throws \Exception
     */
    public function updated($propertyName): void
    {
        switch ($propertyName) {
            case 'form.postalCode':
            case 'form.iban':
                $this->form->{str_replace('form.', '', $propertyName)} = strtoupper($this->form->{str_replace('form.', '', $propertyName)});
                break;
        }
    }

    /**
     * Submit
     */
    public function submit(): void
    {
        $this->validate();

        InsuranceApplication::create([
            'company_name'  => $this->form->companyName,
            'legal_form_id' => $this->form->legalForm,
            'iban'          => $this->form->iban,
            'street'        => $this->form->street,
            'house_number'  => $this->form->houseNumber,
            'postal_code'   => $this->form->postalCode,
            'city'          => $this->form->city,
            'email'         => $this->form->email,
            'finance_email' => $this->form->financeEmail,
        ]);

        Mail::to($this->form->email)->send(new InsuranceApplicationSent($this->form));
        Mail::to($this->form->email)->send(new InsuranceApplicationReceived($this->form));

        session()->flash('formSuccess', __('Je aanvraag is succesvol verzonden!'));
    }
}
