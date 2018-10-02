<?php

namespace App\Classes;

use App\Rules\Zip;
use Illuminate\Support\Facades\Validator;

class CheckoutForm
{
    private $fields;

    public function __construct()
    {
        $this->setFields();
    }

    private function setFields()
    {
        $this->fields = [
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'street' => 'required|string',
            'apartment' => '',
            'city' => 'required|string',
            'state' => 'required|string',
            'zipcode' => [
                'required',
                new Zip(),
                'size:5'
            ],
            'date' => 'date',
            'additional' => '',
            'name_on_card' => 'required|string',
            'phone' => '',
            'email' => 'required|email',
        ];
    }

    public function getFields()
    {
        return $this->fields;
    }


    public function validateField($name, $value)
    {
        $arrParams = [$name => $value];

        Validator::make($arrParams, [
            $name => $this->fields[$name],
        ])->validate();
    }

    public function validateForm(array $input)
    {
        Validator::make($input, $this->fields)->validate();
    }
}
