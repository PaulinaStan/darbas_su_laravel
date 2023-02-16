<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /** * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
public function authorize(): bool
{
    return true;
}

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
             'name' => ['requered', 'string', 'min:3', 'max:255',],
            'price' => ['requered', 'integer', 'min:0'],
            'category_id' => ['requered', 'integer', 'exists:categories,id',],
            'status' => ['requered', 'integer', 'exists:status,id',],
            'slug' => ['requered', 'string', 'min:3', 'max:255',],
        ];
    }
}
