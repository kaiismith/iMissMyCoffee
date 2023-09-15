<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home() {
        return view('web.iframe');
    }

    public function showDashboard1() {
        return view('web.index1');
    }

    public function showDashboard2() {
        return view('web.index2');
    }

    public function showSimpleTables() {
        return view('web.simple');
    }

    public function showDataTables() {
        return view('web.data');
    }

    // Say Hello World!

    // Hello World!

    // Hi
}
