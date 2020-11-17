<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with = ['father', 'mother', 'guardian'];

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function receiveAtGrade()
    {
        return $this->belongsTo(Grade::class, 'receive_at_grade_id');
    }

    public function dropOut()
    {
        return $this->hasOne(DropOutStudent::class);
    }

    public function father()
    {
        return $this->hasOne(Father::class);
    }

    public function mother()
    {
        return $this->hasOne(Mother::class);
    }

    public function guardian()
    {
        return $this->hasOne(Guardian::class);
    }
}
