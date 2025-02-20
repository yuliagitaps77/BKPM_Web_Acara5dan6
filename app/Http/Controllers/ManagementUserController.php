<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{

    public function index()
    {
        $nama = "Yulia Gita Permata Sari";

        $pelajaran = ["Algoritma & Pemrograman", "Kalkulus", "Pemrograman Web"];

        return view('home', compact('nama', 'pelajaran'));


    }
}