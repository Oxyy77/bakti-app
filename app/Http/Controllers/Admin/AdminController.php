<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $currentPage = 'dashboard-admin';
 
        return view('admin.dashboard-admin', compact('currentPage'));
    }
}