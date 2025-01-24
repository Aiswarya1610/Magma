<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {
        return view('home');
    }

    public function handleFormSubmission(Request $request)
    {
        $inputs = $request->validate([
            'contact_name' => 'required|string|max:255',
            'contact_email' => 'required|email|max:255',
            'contact_phone' => 'required|string|max:20',
            'contact_location' => 'required|string|max:255',
            'property_type' => 'required|in:residential,commercial,industrial,land',
            'contact_message' => 'nullable|string|max:1000',
        ]);
    
        Contact::create($inputs);
       
        return redirect()->route('thankyou')->with('success', 'Form submitted successfully!');
    }
    public function showThankYou(){
        return view('thank');
    }
}