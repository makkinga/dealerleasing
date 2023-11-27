<?php

namespace App\Rules;

use Closure;
use Iban\Validation\Iban;
use Iban\Validation\Validator;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Translation\PotentiallyTranslatedString;

class ValidIban implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param Closure(string): PotentiallyTranslatedString $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $iban      = new Iban($value);
        $validator = new Validator();

        if (!$validator->validate($iban)) {
            $fail(__('Vul een geldig IBAN nummer in'));
        }
    }
}
