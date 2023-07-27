<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Alert;
use App\Exports\MahasiswaExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();

        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Step 1: Validate the incoming data
        $validatedData = $request->validate([
            'nim' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'fakultas' => 'required|string|max:255',
            'prodi' => 'required|string|max:255',
            'no_telpon' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:mahasiswa',
            'dosen_wali' => 'required|string|max:255',
        ]);

        // Step 2: Create a new Mahasiswa instance and fill it with the validated data
        $result = Mahasiswa::create($validatedData);

        if($result) {
            Alert::success('Success', 'You\'ve Successfully Created');
        } else {
            Alert::error('Failed', 'You\'ve Failed Created');
        }

        // Step 4: Redirect the user to a specific route or page
        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.form', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        // Step 1: Validate the incoming data
        $validatedData = $request->validate([
            'nim' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'fakultas' => 'required|string|max:255',
            'prodi' => 'required|string|max:255',
            'no_telpon' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'dosen_wali' => 'required|string|max:255',
        ]);

        // Step 2: Create a new Mahasiswa instance and fill it with the validated data
        $result = $mahasiswa->update($validatedData);

        if($result) {
            Alert::success('Success', 'You\'ve Successfully Updated');
        } else {
            Alert::error('Failed', 'You\'ve Failed Updated');
        }

        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $result = $mahasiswa->delete();

        if($result) {
            Alert::success('Success', 'You\'ve Successfully Deleted');
        } else {
            Alert::error('Failed', 'You\'ve Failed Deleted');
        }

        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa deleted successfully!');
    }

    public function exportExcel()
    {
        return Excel::download(new MahasiswaExport(), 'mahasiswa.xlsx');
    }

    public function exportPDF()
    {
        $mahasiswa = Mahasiswa::all();

        $pdf = PDF::loadView('mahasiswa.exportPDF', ['mahasiswa' => $mahasiswa])->setPaper('a4', 'landscape');;

        return $pdf->download('Data Mahasiswa.pdf');
    }
}
