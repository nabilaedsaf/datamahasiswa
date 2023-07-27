<?php

namespace App\Exports;

use App\Models\Mahasiswa;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\View\View;

class MahasiswaExport implements FromView
{
    use Exportable;

    public function view(): View
    {
        $mahasiswa = Mahasiswa::all(); // Modify the query to fetch the data you want to export

        return view('mahasiswa.exportExcel', [
            'mahasiswa' => $mahasiswa,
        ]);
    }
}
