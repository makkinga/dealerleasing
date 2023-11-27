<x-steps>
    <x-step step="1">
        <x-slot name="heading">{{ __('Uitleg') }}</x-slot>

        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aut autem beatae consequatur consequuntur cum delectus, dicta, facere illo laudantium magni modi nobis nostrum obcaecati rem reprehenderit sapiente soluta vero?
    </x-step>
    <x-step step="2">
        <x-slot name="heading">{{ __('Dekkingskeuze') }}</x-slot>

        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aut autem beatae consequatur consequuntur cum delectus, dicta, facere illo laudantium magni modi nobis nostrum obcaecati rem reprehenderit sapiente soluta vero?
    </x-step>
    <x-step step="3">
        <x-slot name="heading">{{ __('Bedrijfsgegevens') }}</x-slot>

        <form wire:submit="submit">
            <div class="mx-4 my-6 grid grid-cols-1 gap-6">
                <x-input-group :label="__('Bedrijfsnaam')" model="form.companyName">
                    <input wire:model.live="form.companyName" type="text" placeholder="Praktijk v. Waterschoot"/>
                </x-input-group>

                <x-input-group :label="__('Rechtsvorm')" model="form.legalForm">
                    <select wire:model.live="form.legalForm">
                        <option value="">{{ __('Selecteer een rechtsvorm') }}</option>
                        @foreach($legalForms as $legalForm)
                            <option value="{{ $legalForm->id }}">{{ $legalForm->name }}</option>
                        @endforeach
                    </select>
                </x-input-group>

                <hr>

                <x-input-group :label="__('Straat')" model="form.street">
                    <input wire:model.live="form.street" type="text" placeholder="Kerkstraat"/>
                </x-input-group>

                <x-input-group :label="__('Huisnummer')" model="form.houseNumber">
                    <input wire:model.live="form.houseNumber" type="text" placeholder="3"/>
                </x-input-group>

                <x-input-group :label="__('Postcode')" model="form.postalCode">
                    <input wire:model.live="form.postalCode" type="text" placeholder="5050 AB"/>
                </x-input-group>

                <x-input-group :label="__('Woonplaats')" model="form.city">
                    <input wire:model.live="form.city" type="text" placeholder="Tilburg"/>
                </x-input-group>

                <hr>

                <x-input-group :label="__('IBAN')" model="form.iban">
                    <input wire:model.live="form.iban" type="text" placeholder="NL00 RABO 0123 4567 89"/>
                </x-input-group>

                <hr>

                <x-input-group :label="__('E-mail')" :instructions="__('Klant')" model="form.email">
                    <input wire:model.live="form.email" type="email" placeholder="h.janssen@gmail.com"/>
                </x-input-group>

                <div class="lg:grid lg:grid-cols-12">
                    <div class="lg:col-span-8 lg:col-start-4 instructions">{{ __('Vul het veld voor e-mailadres financiële correspondentie alleen in wanneer de financiële stukken op een afwijkend e-mailadres moeten worden bezorgd.') }}</div>
                </div>

                <x-input-group :label="__('E-mail')" :instructions="__('Financiële correspondentie')" model="form.financeEmail">
                    <input wire:model.live="form.financeEmail" type="email" placeholder="finance@gmail.com"/>
                </x-input-group>

                <div class="flex items-center">
                    <button type="submit">{{ __('Verzenden') }}</button>
                    <svg wire:loading class="w-4 h-4 ml-2 fill-black animate-spin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M12,4V2A10,10 0 0,0 2,12H4A8,8 0 0,1 12,4Z"/>
                    </svg>
                </div>
            </div>

            <x-sessionToast message="formSuccess"></x-sessionToast>
        </form>
    </x-step>
</x-steps>

