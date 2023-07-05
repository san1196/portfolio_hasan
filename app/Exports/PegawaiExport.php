<?php

namespace App\Exports;

use App\Pegawai;
use Maatwebsite\Excel\Concerns\FromCollection;

class PegawaiExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $nama_pegawai = 'Ru';
        return Pegawai::where('nama','LIKE','%'.$nama_pegawai.'%')->get();
    }
}
