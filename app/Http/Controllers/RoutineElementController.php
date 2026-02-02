<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoutineElement;

class RoutineElementController extends Controller
{
    public function store(Request $request) {
        $data = $request->validate([
            'practice_routine_id' => 'required|exists:practice_routines,id',
            'title' => 'required|string|max:255',
        ]);

        RoutineElement::create($data);

        return back();
    }
}

