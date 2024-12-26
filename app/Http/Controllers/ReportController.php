<?php

namespace App\Http\Controllers;

use App\Models\FireArea;
use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    // Menampilkan halaman index
    public function index()
    {
        $fireAreas = FireArea::all(); // Ambil semua data laporan
        return view('fire-area.index', compact('fireAreas')); // Kirim ke view
    }

    // Menampilkan form laporan
    public function create()
    {
        return view('fire-area.report');
    }

    // Menyimpan data laporan
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'risk_level' => 'required|integer|between:1,10',
        ]);

        FireArea::create($validatedData); // Simpan ke database

        return redirect()->route('index')->with('success', 'Laporan berhasil diajukan.');
    }
}
