<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'start_date' => 'required|date',
            'end_date' => 'required|date'
        ]);

        $training = Training::create($request->all());
        return response()->json($training, 201);
    }
}
