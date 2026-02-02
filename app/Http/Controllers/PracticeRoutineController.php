<?php

namespace App\Http\Controllers;

use App\Models\PracticeRoutine;
use Illuminate\Http\Request;

class PracticeRoutineController extends Controller
{
    public function create() {
        return view('practice-routines.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $routine = auth()->user()->practiceRoutines()->create($data);

        return redirect()->route('practice-routines.edit', $routine);
    }

    public function edit(PracticeRoutine $practiceRoutine) {

        return view('practice-routines.edit', [
            'routine' => $practiceRoutine->load('elements')
        ]);
    }

    public function update(Request $request, PracticeRoutine $practiceRoutine) {
        
        $data = $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $practiceRoutine->update($data);

        return back();
    }

    public function show(PracticeRoutine $practiceRoutine) {

        return view('practice-routines.show', [
            'routine' => $practiceRoutine->load('elements')
        ]);
    }

    public function index() {
        
    $routines = auth()->user()
        ->practiceRoutines()
        ->latest()
        ->get();

    return view('practice-routines.index', [
        'routines' => $routines,
    ]);
}

}
