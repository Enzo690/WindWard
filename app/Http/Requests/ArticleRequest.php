<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    // Sanitation rules...
    public function sanitize()
    {
        return [
        'title' => 'trim|ucwords',
        ];
    }

    public function rules()
    {
        return [
            'content'  => 'required',
            'title' => 'required',
            'file' => 'image'
        ];
    }
}
