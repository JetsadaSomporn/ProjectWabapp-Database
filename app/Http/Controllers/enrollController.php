<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class enrollController extends Controller
{
    public function enroll(){
    return view('enroll.enrollwork');
}
public function index(){
    $students = User::all();
    //$softDeletedStudents = user::onlyTrashed()->get();
    return view('test', compact('students'));//'softDeletedStudents'));}
}
}
