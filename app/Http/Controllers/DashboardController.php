<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(){
        $user = \Session::get('user');
        return view('Layouts.Dashboard',compact('user'));
    }
}
