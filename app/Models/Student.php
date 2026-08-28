<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    /**
     * Mass assignable attributes.
     */
    protected $fillable = [
        'student_id',
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'mobile_number',
        'date_of_birth',
        'gender',
        'program',
        'year_level',
        'address',
        'profile_picture',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
    ];

    /**
     * Full name accessor, e.g. "Juan Dela Cruz" or "Juan M. Dela Cruz".
     */
    public function getFullNameAttribute(): string
    {
        $middle = $this->middle_name ? ' ' . strtoupper(substr($this->middle_name, 0, 1)) . '. ' : ' ';
        return trim($this->first_name . $middle . $this->last_name);
    }

    /**
     * Public URL to the stored profile picture.
     */
    public function getProfilePictureUrlAttribute(): string
    {
        return asset('storage/' . $this->profile_picture);
    }
}
