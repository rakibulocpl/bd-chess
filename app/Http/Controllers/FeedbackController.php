<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        return view('feedback');

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'mobile' => 'nullable|max:11',
            'feedback' => 'required|string',
        ]);

        Feedback::create($validated);

        return redirect()->back()->with('status', 'Feedback submitted successfully!');


    }
}
