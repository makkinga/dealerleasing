<?php

namespace Database\Seeders;

use App\Models\LegalForm;
use Illuminate\Database\Seeder;

class LegalFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $legalForms = [
            'Eenmanszaak',
            'VOF',
            'Maatschap',
            'Besloten vennootschap',
            'Naamloze vennootschap',
            'Stichting',
            'Vereniging',
            'Overig',
        ];

        foreach ($legalForms as $legalForm) {
            LegalForm::create([
                'name' => $legalForm,
            ]);
        }
    }
}
