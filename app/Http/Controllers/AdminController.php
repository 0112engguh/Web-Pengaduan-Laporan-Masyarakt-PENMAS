<?php

namespace App\Http\Controllers;

use PDF;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function laporan()
    {
        $items = Pengaduan::orderBy('created_at', 'DESC')->get();
        return view('admin.laporan', compact('items'));
    }

    public function cetak_laporan()
    {
        $data = Pengaduan::orderBy('created_at', 'DESC')->get();
        // dd($data);

        $cetak_all = PDF::loadview('admin.cetak_laporan', compact('data'));
        return $cetak_all->setPaper('a4', 'potrait')->stream('.pdf');
    }

    public function pdf($id)
    {
        $item = Pengaduan::with([
            'details', 'user'
        ])->findOrFail($id);

        $pdf  = PDF::loadview('admin.pdf', compact('item'));
        return $pdf->setPaper('a4', 'potrait')->stream('.pdf');
    }
}
    