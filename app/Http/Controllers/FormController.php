<?php

namespace App\Http\Controllers;

use App\Mail\ConfirmationEmail;
use App\Mail\NotificationEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'fullname' => 'required|string',
            'company' => 'nullable|string',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'location' => 'required|string',
            'service' => 'required|string',
        ]);

        // Send notification email
        Mail::to('kwadwookyere@gmail.com')->send(new NotificationEmail($validatedData));

        // Send confirmation email to user
        Mail::to($validatedData['email'])->send(new ConfirmationEmail($validatedData));

        return response()->json(['success' => true]);
    }
}
