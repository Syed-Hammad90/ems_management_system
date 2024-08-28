<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SalesManagerController extends Controller
{

    public function dashboard()
    {
        return view('member.dashboard');
    }

    public function submitLead(Request $request)
{
    $request->validate([
        'client_name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'phone_number' => 'required|string|max:20',
        'product' => 'required|string|max:255',
        'amount' => 'required|numeric',
        'description' => 'nullable|string',
    ]);

    Lead::create([
        'sales_manager_id' => auth()->id(),
        'client_name' => $request->client_name,
        'email' => $request->email,
        'phone_number' => $request->phone_number,
        'product' => $request->product,
        'amount' => $request->amount,
        'description' => $request->description,
    ]);

    return redirect()->back()->with('success', 'Lead submitted successfully.');
}
}
