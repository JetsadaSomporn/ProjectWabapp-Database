<?php

namespace App\Http\Controllers;

use App\Models\{JobInfo,
    Question,
    Question_has_jobInfo,
    responseJobInfo,
    User,
};

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class enrollController extends Controller
{
    public function enroll(){
    return view('enroll.enrollwork');
}
}
