<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    
    public function dashboard(){
        return view("dashboard");
    }

    public function setup_sss(){
        return view("admin.setup.sss");
    }

    public function setup_bir(){
        return view("admin.setup.bir");
    }

    public function setup_philhealth(){
        return view("admin.setup.philhealth");
    }

    public function setup_pagibig(){
        return view("admin.setup.pagibig");
    }
}
