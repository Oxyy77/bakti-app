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

    public function indexTugas(){
        $currentPage = 'tugas';
 
        return view('admin.tugas', compact('currentPage'));
    }

    public function indexKuis(){
        $currentPage = 'kuis';
 
        return view('admin.kuis', compact('currentPage'));
    }
    public function indexFormKuis(){
        $currentPage = 'kuis';
 
        return view('admin.form-kuis-admin', compact('currentPage'));
    }

    public function indexLihatKuis(){
        $currentPage = 'kuis';
 
        return view('admin.lihat-kuis', compact('currentPage'));
    }
}
