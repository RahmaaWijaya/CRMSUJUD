<?php

namespace App\Http\Controllers;

use App\Models\Deal;
use Illuminate\Http\Request;

use App\Imports\DealsImport;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;


//import return type View
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;


class DealsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $deals = Deal::all();
        return view('pages/deals/deals', compact('deals'));
    }

    
    public function import()
    {
        //
        return view('pages/deals/import-deals');
    }
    
    public function import1(Request $request)
    {
        //validasi file dan status
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx',
        ]);

        //mengambil file yang diuanggah
        $file = $request->file('file');
        
        //mmebuat nama file unik
        $nama_file = $file->hashName();
        
        //simpan sementara do storage (public/excel)
        $path = $file->storeAs('public/excel/', $nama_file);
        
        try {
            //proses imort daata dati file yang sudah diuanggah
            Excel::import(new DealsImport(), storage_path('app/public/excel/'.$nama_file));
            
            //redirect dengan pesan sukses
            return redirect()->route('deal')->with(['success' => 'Data Berhasil Di Import!']);
            
        } catch (\Exception $e) {
            //jika ada error, tampilkan pesan error
            dd($e->getMessage());
            return redirect()->route('deal')->with(['error' => 'Data Gagal Di Import! Error' . $e->getMessage()]);
        }
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pages/deals/create-deals');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi form
        $request->validate([
            'nama' => 'required|string',
            'deskripsi' => 'required|string',
            'status' => 'required|string',
            'jumlah' => 'required|decimal:3,3',
            'waktu' => 'required',
        ]);

        //update deal
        Deal::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'jumlah' => $request->jumlah,
            'status' => $request->status,
            'waktu' =>$request->waktu
        ]);

        //redirect to index
        return redirect()->route('deal')->with(['succes' => 'Data Berhasil Disimpan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit1()
    {
        //
        return view('pages/deals/edit-deals');
    }
    public function edit(string $id):View
    {
        //unutk mendapatkan deals berdasarkan id
        $deal = Deal::findOrFail($id);

        //render view with deal
        return view('pages/deals/edit-deals', compact('deal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //validate form
        // $request->validate([
        $validator = Validator::make($request->all(), [
            'contact_id' => 'nullable|unsignedBigInt',
            'nama' => 'required|string',
            'deskripsi' => 'required|text',
            'status' => 'required|string',
            'jumlah' => 'required|decimal:3,3',
            'waktu' => 'required'
        ]);

        // if ($validator->fails()) {
        //     dd($validator->errors()); 
        // }

        //mendapatkan deal berdasarkan id
        $deal = Deal::findOrFail($id);

        //update deal
        $deal->update([
            'contact_id' => $request->contacts_id,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'status' => $request->status,
            'jumlah' => $request->jumlah,
            'waktu' => $request->waktu,
        ]);

        //redirect to view
        return redirect()->route('deal')->with(['success' => 'Data Berhasil Diubah!']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):RedirectResponse
    {
        //mendapatkan deals berdasarkan id
        $deal = Deal::findOrFail($id);

        //delete deal
        $deal->delete();

        return redirect()->route('deal')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
