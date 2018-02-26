<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Admin;
class AdminController extends Controller
{
    public function _construct()
    {
    	$this->middleware('admin');
    }
    public function index()
    {
    	return view('layouts.loginform');
    }
}
