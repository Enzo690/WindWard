<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    // Sanitation rules...
    public function sanitize()
    {
        return [
            'firstname' => 'trim|ucwords',
            'lastname' => 'trim|ucwords',
            'phone' => 'trim|ucwords',
            'subject' => 'trim|ucwords',
            'message' => 'trim|ucwords',
        ];
    }

    public function rules()
    {

        return [
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ];
    }
}
