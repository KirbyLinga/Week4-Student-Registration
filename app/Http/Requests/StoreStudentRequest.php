<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
{
    /**
     * Anyone can submit the registration form.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Validation rules for student registration.
     */
    public function rules(): array
    {
        return [
            'student_id'       => ['required', 'string', 'max:20', 'unique:students,student_id'],
            'first_name'       => ['required', 'string', 'max:100'],
            'middle_name'      => ['nullable', 'string', 'max:100'],
            'last_name'        => ['required', 'string', 'max:100'],
            'email'            => ['required', 'email', 'max:150', 'unique:students,email'],
            'mobile_number'    => ['required', 'numeric', 'digits_between:10,15'],
            'date_of_birth'    => ['required', 'date', 'before:today'],
            'gender'           => ['required', 'in:Male,Female'],
            'program'          => ['required', 'string', 'max:150'],
            'year_level'       => ['required', 'string', 'max:50'],
            'address'          => ['required', 'string', 'max:500'],
            'profile_picture'  => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
        ];
    }

    /**
     * Friendlier field names for error messages.
     */
    public function attributes(): array
    {
        return [
            'student_id'      => 'Student ID',
            'first_name'      => 'first name',
            'middle_name'     => 'middle name',
            'last_name'       => 'last name',
            'mobile_number'   => 'mobile number',
            'date_of_birth'   => 'date of birth',
            'year_level'      => 'year level',
            'profile_picture' => 'profile picture',
        ];
    }

    /**
     * Custom validation messages.
     */
    public function messages(): array
    {
        return [
            'student_id.unique'      => 'This Student ID is already registered.',
            'email.unique'           => 'This email address is already registered.',
            'profile_picture.image'  => 'The profile picture must be an image file.',
            'profile_picture.mimes'  => 'The profile picture must be a JPG, JPEG, or PNG file.',
            'profile_picture.max'    => 'The profile picture must not exceed 2MB.',
            'date_of_birth.before'   => 'Date of birth must be a date in the past.',
        ];
    }
}
