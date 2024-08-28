<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\SalesManager;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    /**
     * Display a listing of the leads.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Fetch all leads with sales manager information
        $leads = Lead::with('salesManager')->get();

        return view('leads.index', compact('leads'));
    }

    /**
     * Show the form for creating a new lead.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Return the form view to create a new lead
        return view('leads.create');
    }

    /**
     * Store a newly created lead in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'client_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone_number' => 'required|string|max:20',
            'product' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        // Create the lead
        Lead::create([
            'sales_manager_id' => auth()->id(),
            'client_name' => $request->client_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'product' => $request->product,
            'amount' => $request->amount,
            'description' => $request->description,
        ]);

        return redirect()->route('leads.index')->with('success', 'Lead created successfully.');
    }

    /**
     * Display the specified lead.
     *
     * @param  \App\Models\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function show(Lead $lead)
    {
        // Display a single lead's details
        return view('leads.show', compact('lead'));
    }

    /**
     * Show the form for editing the specified lead.
     *
     * @param  \App\Models\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function edit(Lead $lead)
    {
        // Return the form view to edit the lead
        return view('leads.edit', compact('lead'));
    }

    /**
     * Update the specified lead in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lead $lead)
    {
        // Validate the request data
        $request->validate([
            'client_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone_number' => 'required|string|max:20',
            'product' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        // Update the lead
        $lead->update($request->all());

        return redirect()->route('leads.index')->with('success', 'Lead updated successfully.');
    }

    /**
     * Remove the specified lead from storage.
     *
     * @param  \App\Models\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lead $lead)
    {
        // Delete the lead
        $lead->delete();

        return redirect()->route('leads.index')->with('success', 'Lead deleted successfully.');
    }
}

// <?php
// namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

// class LeadController extends Controller
// {
//     //
// }
