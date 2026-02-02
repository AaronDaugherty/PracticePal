<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoutineElement extends Model
{
    protected $fillable = ['title', 'order', 'practice_routine_id'];


    public function routine() {
        return $this->belongsTo(PracticeRoutine::class);
    }
}
