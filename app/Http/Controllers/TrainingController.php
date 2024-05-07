<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TrainingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'start_date' => 'required|date',
            'end_date' => 'required|date'
        ]);

        $training = Training::create($request->all());

         // Detailed log information similar to the login method
         Log::info('New training created', ['id' => $training->id]);

        return response()->json([
            'message' => 'Training created successfully',
            'training' => $training
        ], 201);
    }
}
