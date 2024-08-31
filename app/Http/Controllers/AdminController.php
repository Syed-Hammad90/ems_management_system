<?php

namespace App\Http\Controllers;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\SalesManagerController;
use App\Models\User;

class AdminController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function allSalesManager()
    {
        $users = User::where('role_id', 2 )->get();

        return view('admin.online_users', compact('users'));
    }

    public function createSalesManager()
    {
        return view('admin.new_employe_form');
    }

    public function storeSalesManager(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:sales_managers',
            'password' => 'required|string|min:8',
            'lead_target' => 'required|integer',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'lead_target' => $request->lead_target,
            'role_id' => 2,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Sales Manager created successfully.');
    }

    public function editSalesManager($id)
    {
        $user = User::findorfail($id);

        return view('admin.edit_sales_manager', compact('user'));
    }



    public function updateSalesManager(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'required',
            // 'role_id' => 'required|integer',
            'lead_target' => 'required|integer',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'lead_target' => $request->lead_taget,
        ];

        // Find the user by ID
        $user = User::findOrFail($id);

        // Update the user's details
        $user->update($data);

        // Optionally, you can return a response or redirect
        return redirect()->route('admin.dashboard')->with('success', 'Sales Manager updated successfully.');
    }


    public function deleteSalesManager($id)
    {
        $user = User::findorfail($id);

        // Delete the user
        $user->delete();


        return redirect()->route('admin.dashboard')->with('success', 'Sales Manager deleted successfully.');
    }



}
