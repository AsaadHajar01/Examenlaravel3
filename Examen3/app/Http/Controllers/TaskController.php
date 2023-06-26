<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'text' => 'required',
            'deadline' => 'required|date',
        ]);

        Task::create($validatedData);

        return redirect('/tasks')->with('success', 'Taak is succesvol aangemaakt.');
    }

    // Andere methoden zoals update, show en destroy kunnen hier worden toegevoegd.
}
