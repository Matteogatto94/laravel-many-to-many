<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
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
            'title' => ['required', 'max:100', Rule::unique('projects')->ignore($this->project->id)],
            'cover_image' => ['nullable', 'image', 'max:300'],
            'category_id' => ['nullable', 'exists:categories,id'],
            'technologies' => ['exists:technologies,id'],
            'body' => ['nullable']
        ];
    }
}
