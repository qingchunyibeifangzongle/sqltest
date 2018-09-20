<?php

namespace App\Http\Controllers\Sqltest;

use App\Models\Sqltest\user;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SqltestController extends Controller
{
    public function index(Request $request)
    {
        $user = User::where('age' , 11)->first();
        dd($user);

    }
}
