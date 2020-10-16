<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'nvacancy',
    ];

    /**
     * Get the students registereds in the grade.
     */
    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
