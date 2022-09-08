<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view_catagory()
    {
        return view('admin.catagory');
    }
}
