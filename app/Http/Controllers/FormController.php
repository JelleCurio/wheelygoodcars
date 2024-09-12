<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Car;


// Import the Car model
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validate form input data
        $validatedData = $request->validate([
            'license_plate' => 'required|string|max:255',
        ]);

        // Redirect to the next page with input data
        return redirect()->route('next-page.show')->with('inputText', $validatedData['license_plate']);
    }

    public function showNextPage(Request $request)
    {
        // Get inputText from session, default to an empty string if not present
        $inputText = session('inputText', '');

        return view('layouts.next-page', compact('inputText'));
    }

    public function SaveToDB(Request $request){

        // Validate the input data
        $validatedData = $request->validate([
            'license_plate' => 'required|string|max:255',
        ]);

        // Create a new Car record with the validated license_plate and user_id
        Car::create([
            'user_id' => Auth::id(),
            'license_plate' => $validatedData['license_plate']
        ]);

    }
}
