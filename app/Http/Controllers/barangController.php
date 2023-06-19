<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\Satuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class barangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'barang List';
        // ELOQUENT
        $barang = barang::get();
        return view('employee.index', [
            'pageTitle' => $pageTitle,
            'barangs' => $barang
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Create barang';
        // ELOQUENT
        $satuans = Satuan::all();
        return view('employee.create', compact('pageTitle', 'satuans'));
    }

    /**
     * Store a newly created resource in storHarga.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            // 'Deskripsi' => 'Isi :attribute dengan format yang benar',
            'numeric' => 'Isi :attribute dengan angka'
        ];
        $validator = Validator::make($request->all(), [
            'Kode_barang' => 'required',
            'nama_barang' => 'required',
            'Deskripsi' => 'required',
            'Harga' => 'required|numeric',
        ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // ELOQUENT
        $barang = new barang;
        $barang->Kode_barang = $request->Kode_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->Deskripsi = $request->Deskripsi;
        $barang->Harga = $request->Harga;
        $barang->Satuan_id = $request->Satuan;
        $barang->save();
        return redirect()->route('barangs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'barang Detail';
        // ELOQUENT
        $barang = barang::find($id);
        return view('employee.show', compact('pageTitle', 'barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Edit barang';
        // ELOQUENT
        $Satuans = Satuan::all();
        $barang = barang::find($id);
        return view('employee.edit', compact(
            'pageTitle',
            'Satuans',
            'barang'
        ));
    }

    /**
     * Update the specified resource in storHarga.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            // 'Deskripsi' => 'Isi :attribute dengan format yang benar',
            'numeric' => 'Isi :attribute dengan angka'
        ];
        $validator = Validator::make($request->all(), [
            'Kode_barang' => 'required',
            'nama_barang' => 'required',
            'Deskripsi' => 'required',
            'Harga' => 'required|numeric',
        ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // ELOQUENT
        $barang = barang::find($id);
        $barang->Kode_barang = $request->Kode_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->Deskripsi = $request->Deskripsi;
        $barang->Harga = $request->Harga;
        $barang->Satuan_id = $request->Satuan;
        $barang->save();
        return redirect()->route('barangs.index');
    }

    /**
     * Remove the specified resource from storHarga.
     */
    public function destroy(string $id)
    {
        // ELOQUENT
        barang::find($id)->delete();
        return redirect()->route('barangs.index');
    }
}
