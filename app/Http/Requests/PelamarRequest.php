<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PelamarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'alamat' => ['required', 'string'],
            'jk' => ['required', 'string'],
            'tempat_lahir' => ['required', 'string', 'max:255'],
            'tanggal_lahir' => ['required', 'string', 'max:255'],
            'telpon' => ['required', 'string', 'min:10', 'max:18'],
            'status_kawin' => ['required', 'string'],
            'pendidikan_terakhir' => ['required', 'string', 'max:255'],
            'photo_path' => [Rule::requiredIf(request()->isMethod('post')), 'file', 'image', 'mimes:jpg,jpeg,png'],
            'resume_path' => [Rule::requiredIf(request()->isMethod('post')), 'file', 'mimes:pdf,docx'],
        ];
    }
}
