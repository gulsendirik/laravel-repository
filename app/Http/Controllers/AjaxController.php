<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AjaxController extends Controller
{ 
    public function index(Request $request)
    {
        $users = DB::table('users')->get();
        return response()->json($users);
    }
}