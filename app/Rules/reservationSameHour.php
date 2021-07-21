<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Symfony\Component\VarDumper\VarDumper;

class reservationSameHour implements Rule
{
    public $hourMeeting;
   
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($column)
    {
        $this -> hourMeeting = $column;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        var_dump('value',$value,'valeur en base', $this -> hourMeeting);
        return $value === $this -> hourMeeting;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return "L'heure de rendez vous est deja prise";
    }
}
