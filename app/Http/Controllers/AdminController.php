<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function showUsers()
    {
        $users = User::where('type', 0)->get(); // Retrieve users with type 0
        $posers = User::where('type', 1)->get(); // Retrieve posers with type 1

        return view('adminUser', compact('users', 'posers'));
    }

    public function searchUser(Request $request)
    {
        $search = $request->input('search');

        $users = User::where('name', 'like', '%' . $search . '%')
            ->orWhere('email', 'like', '%' . $search . '%')
            ->orWhere('type', 'like', '%' . $search . '%')
            ->get();
        $posers = User::where('name', 'like', '%' . $search . '%')
            ->orWhere('email', 'like', '%' . $search . '%')
            ->orWhere('type', 'like', '%' . $search . '%')
            ->get();

        return view('adminUser', compact('users', 'posers'));
    }

    public function delete($idUser)
    {
        $user = User::find($idUser);
        $poser = User::find($idUser);

        if (!$user || !$poser) {
            //error message
            Log::error("User with ID $idUser not found.");
            return redirect()->route('adminUser')->with('error', 'User not found');
        }

        $user->delete();
        $poser->delete();

        $users = User::where('type', 0)->get();
        $posers = User::where('type', 1)->get();

        return view('adminUser', compact('users', 'posers'));
    }
}
