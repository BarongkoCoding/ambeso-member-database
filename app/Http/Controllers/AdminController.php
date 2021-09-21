<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    { 
        $data_member = \App\Models\member::all();
        $count = DB::table('member')->count('rfid');
        return view('AdminContent.adminhome', ['data_member' => $data_member],["title" => "Dashboard"], ['total' => $count]);
    }
    public function chart()
    {
        return view('AdminContent.adminchart', ["title" => "Chart"]);
    }
    public function membertabel()
    {
        $data_member = \App\Models\member::all();
        return view('AdminContent.admintabelmember', ['data_member' => $data_member],["title" => "Member Table"]);
    }
    public function adminlogin()
    {
        return view('LoginAdmin', ["title" => "AdminLogin"]);
    }
    public function memberstatus()
    {
        return view('MemberLayout.Memberstatus', ["title" => "AdminLogin"]);
    }
}
