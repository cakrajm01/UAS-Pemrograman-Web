<?php

namespace App\Http\Controllers;

use App\Models\Imunisasi;
use Illuminate\Http\Request;

class ImunisasiController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->search;
        $data = Imunisasi::where('nama_anak', 'like', "%$keyword%")
                ->orWhere('nik', 'like', "%$keyword%")
                ->orderBy('id', 'asc')->paginate(10);

        return view('imunisasi.index', compact('data', 'keyword'));
    }

    public function create()
    {
        return view('imunisasi.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'nama_anak' => 'required',
            'nik' => 'required|digits:16',
            'nama_orang_tua' => 'required',
            'jenis_imunisasi' => 'required',
            'tanggal' => 'required|date',
        ]);

        Imunisasi::create($request->all());
        

        return redirect()->route('imunisasi.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $imunisasi = Imunisasi::findOrFail($id);
        return view('imunisasi.edit', compact('imunisasi'));
    }

    public function show($id)
    {
        $data = Imunisasi::findOrFail($id);
        return view('imunisasi.show', compact('data'));
    }



    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_anak' => 'required',
            'nik' => 'required|digits:16',
            'nama_orang_tua' => 'required',
            'jenis_imunisasi' => 'required',
            'tanggal' => 'required|date',
        ]);

        $imunisasi = Imunisasi::findOrFail($id);
        $imunisasi->update($request->all());

        return redirect()->route('imunisasi.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        Imunisasi::destroy($id);
        return redirect()->route('imunisasi.index')->with('success', 'Data berhasil dihapus');
    }
}

