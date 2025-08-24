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

    public function list()
    {
        $feedbacks = Feedback::latest()->paginate(10); // or ->get() for all
        return view('feedback.list', compact('feedbacks'));
    }

    public function show($id)
    {
        $feedback = Feedback::findOrFail($id);
        return view('feedback.show', compact('feedback'));
    }
}
