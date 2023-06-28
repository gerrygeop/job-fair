<?php

namespace App\Http\Requests;

use App\Models\Perusahaan;
use Illuminate\Foundation\Http\FormRequest;

class PerusahaanRequest extends FormRequest
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
            'nama_perusahaan' => ['required', 'string', 'max:255'],
            'alamat' => ['required', 'string'],
            'lokasi' => ['required', 'string', 'max:255'],
            'telpon' => ['required', 'string', 'min:12'],
            'url_website' => ['nullable', 'string', 'max:255'],
            'deskripsi' => ['nullable', 'string'],
            'logo_path' => ['nullable', 'file', 'image', 'mimes:jpg,jpeg,png'],
            'file_path' => ['nullable', 'file', 'max:3000', 'mimes:pdf,docx',],
            'industri_id' => ['required', 'exists:industri,id'],
        ];
    }
}
