<?php


namespace App\Http\Controllers;
use App\Models\Report;

use App\Models\FireArea; // Pastikan model FireArea diimpor
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        // Mengambil semua data fireAreas dari database
        $fireAreas = FireArea::all();
        $reports = Report::all(); // Menambahkan laporan

        
        // Mengirim data ke view 'fire-area.index'
        return view('fire-area.index', compact('fireAreas', 'reports')); // Mengirimkan data laporan ke view
    }

    public function about()
    {
        return view('fire-area.about');
    }

    public function contact()
    {
        return view('fire-area.contact');
    }
}

