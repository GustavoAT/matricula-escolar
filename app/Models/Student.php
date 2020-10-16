<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'cpf',
        'birthday',
        'gender',
        'grade',
    ];

    /**
     * Get the grade the student is in.
     */
    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }
}
