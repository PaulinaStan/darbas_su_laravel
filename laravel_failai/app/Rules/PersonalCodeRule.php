<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;


 class PersonalCodeRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($validator, $value)

    {

        // asmens kodo formato reikalavimai:

        $validator->after(function ($validator) use ($value) {
            if (!$this->PersonalCode($this->input('personal_code'))) {
                $validator->errors()->add('personal_code', 'Neteisingas asmens kodas.');


                    {  //gauti (siusti, nezinau kaip tiksliai paaisint) "personal_code" laukelio reikšmę iš HTTP užklausos.

                $PersonalCode = $validator->input('personal_code');
            }
        }
        });
         }


            /**
             * Determine if the validation rule passes.
             *
             * @param string $attribute
             * @param mixed $value
             * @return bool
             */
            public function passes($validator, $value)
            {
                //patikrink ar nurodyta reiksme yra teisinga.

                if (!is_string($value)) {
                    return false;
                }

                //Patikrink, ar reiksme yra skaicius

                if (!is_numeric($value)) {
                    return false;
                }

                //Patikrink, ar skaiciu yra 11.

                if (strlen($value) != 11) {
                    return false;
                }
            }


    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return 'The :attribute must be a 11-digit numeric string.';
    }

    private function personalcode(mixed $value)
    {
    }
}
