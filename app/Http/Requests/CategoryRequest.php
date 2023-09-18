<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            //

                'name' => 'required|max:50',
                'description' => 'nullable|max:50',
                'parent_id' => ['nullable','exists:categories,id'],
                'image' => "nullable|image|mimes:jpeg,jpg,png|max:1024",
                "status" => "required|in:active,inactive",


            //,[
            //     'name.required' => 'أدخل الاسم ',
            //     'status.required' => 'أدخل الحالة ',
            // ]
        ];
    }
    public function messages(){
        return [
                'name.required' => 'أدخل الاسم ',
                'status.required' => 'أدخل الحالة ',
        ];
    }
}
