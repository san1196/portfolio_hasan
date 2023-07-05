<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use PDF;

use App\Exports\PegawaiExport;
use Maatwebsite\Excel\Facades\Excel;
class PegawaiController extends Controller
{
    public function index()
    {
        $data['data_pegawai'] = Pegawai::get();
        $data['header'] = 'List Data Pegawai';
        return view('pegawai', $data);
    }

    public function cetak_pdf()
    {
        $data['pegawai'] = Pegawai::get();
        $pdf = PDF::loadview('pegawai_pdf', $data);
        return $pdf->download('laporan-pegawai-pdf');
    }

    public function cetak_excel()
    {
        return Excel::download(new PegawaiExport, 'data_pegawai.xlsx');
    }
}
