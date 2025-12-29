<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $hasSubmitted = Contact::where('email', $validated['email'])
            ->where('subject', $validated['subject'])
            ->whereDate('created_at', now()->toDateString())
            ->exists();

        if ($hasSubmitted) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['subject' => 'You have already submitted this subject today.']);
        }

        Contact::create($validated);

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
