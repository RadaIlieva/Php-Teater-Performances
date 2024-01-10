<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeaterperformancesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:5|max:255',
            'date' => 'required|date',
            'venue' => 'required|min:5|max:255',
            'additional_info'=>'required|min:5|max:1000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'bilety' => 'nullable|min:5|max:255',
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'name' => 'Performance Name',
            'date' => 'Performance Date',
            'venue' => 'Performance Venue',
            'additional_info'=>'Performance Additiona-iInfo',
            'image' => 'Performance Image',
            'bilety' => 'Ticket',
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'The performance name is required.',
            'name.min' => 'The performance name must be at least :min characters.',
            'name.max' => 'The performance name may not be greater than :max characters.',
            'date.required' => 'The performance date is required.',
            'date.date' => 'The performance date must be a valid date.',
            'venue.required' => 'The performance venue is required.',
            'venue.min' => 'The performance venue must be at least :min characters.',
            'venue.max' => 'The performance venue may not be greater than :max characters.',
            // Добави други съобщения, ако е необходимо
        ];
    }
}
