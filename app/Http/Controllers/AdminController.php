<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showUsers()
{
        $user = User::all();
    
    return view('adminUser', ['users' => $user]);
    
}
public function searchUser(Request $request)
{
    $search = $request->input('search');

    // Perform the search logic here, for example:
    $users = User::where('name', 'like', '%' . $search . '%')
        ->orWhere('email', 'like', '%' . $search . '%')
        ->get();

    return view('adminUser', compact('users'));
}
public function delete($idUser)
{
    $user = User::find($idUser);
    
    if (!$user) {
        return redirect()->route('adminUser')->with('error', 'User not found');
    }

    $user->delete();
    $users = User::all();

    return view('adminUser', compact('users'));
}

    
}
