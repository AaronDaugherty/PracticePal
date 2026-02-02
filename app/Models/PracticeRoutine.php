<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PracticeRoutine extends Model
{
    protected $fillable = ['title', 'user_id'];

public function elements() {
        return $this->hasMany(RoutineElement::class)->orderBy('order');
    }
}
