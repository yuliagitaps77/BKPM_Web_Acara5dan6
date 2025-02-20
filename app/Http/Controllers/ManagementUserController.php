<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    public function index()
    {
        return "Method ini akan digunakan untuk mengambil semua data user";
    }

    public function create()
    {
        return "Method ini akan digunakan untuk menampilkan form tambah user";
    }

    public function store(Request $request)
    {
        return "Method ini akan digunakan untuk menyimpan data user";
    }

    public function show($id)
    {
        return "Method ini akan digunakan untuk menampilkan user dengan ID: " . $id;
    }

    public function edit($id)
    {
        return "Method ini akan digunakan untuk menampilkan form edit user dengan ID: " . $id;
    }

    public function update(Request $request, $id)
    {
        return "Method ini akan digunakan untuk memperbarui user dengan ID: " . $id;
    }

    public function destroy($id)
    {
        return "Method ini akan digunakan untuk menghapus user dengan ID: " . $id;
    }
}
