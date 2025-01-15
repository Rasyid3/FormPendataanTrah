<?php

namespace App\Http\Controllers;
use Illuminate\support\facades\http;
use Illuminate\support\facades\view;
use Illuminate\support\facades\auth;
use Illuminate\support\facades\redirect;
use Illuminate\support\facades\bcrypt;
use Illuminate\support\facades\validator;
use App\Models\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
}
