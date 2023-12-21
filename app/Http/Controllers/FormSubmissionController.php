<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormSubmission;
class FormSubmissionController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    // Handle form submission
    public function submitForm(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string|max:255',
        ]);

        // Create a new form submission
        $submission = FormSubmission::create($validatedData + ['user_id' => auth()->user()->id]);

        return redirect('/submissions')->with('success', 'Form submitted successfully!');
    }

    // Display a list of form submissions
    public function listSubmissions()
    {
        $submissions = FormSubmission::where('user_id', auth()->user()->id)->latest()->get();

        return view('submissions', ['submissions' => $submissions]);
    }
}
