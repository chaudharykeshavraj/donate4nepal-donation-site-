<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index()
    {
        $data['title'] = 'Donate Page';
        $limit = 4;
    return view('public.home.donate', $data);
    }

    public function submit(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required',
            'dropoff_location' => 'required',
        ]);

        // Process the form submission (e.g., save to the database, send email)

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Thank you for your donation!');
    }
}
