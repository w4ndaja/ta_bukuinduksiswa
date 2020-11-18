<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonValue extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with = ['subject'];

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function subject()
    {
    return $this->belongsTo(Subject::class);
    }
}
