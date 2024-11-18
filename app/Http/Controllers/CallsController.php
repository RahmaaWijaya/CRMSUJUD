<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Call;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

//import return type View
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class CallsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $calls = Call::all();
        return view('pages/call/calls', compact('calls'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //unutk mendapatkan call berdasaaarkan id
        $call = Call::findOrFail($id);

        //render view with call
        return view('pages/call/datail-call', compact('call'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        //unutk mendapatkan call berdasarkan id
        $call = Call::findOrFail($id);

        //render vieew call
        return view('pages/call/edit-calls', compact('call'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectRespon
    {
        //validate form
        $requests->validate([
            'nama' => 'required|string',
            'nama_perusahaan' => 'required|string',
            'email' => 'required|email',
            'no_tlp' => 'required|numeric',
            'aktifitas' => 'rwquired|string',
            'negara' => 'required|string',
            'kota' => 'required|string',
            'alamat' => 'required|string',
            'tanggal' => 'required',
            'medsos' => 'nullable|string'
        ]);

        //mendapatkan call berdasarkan id
        $call = Call::findOrFail($id);

        //update call
        $call->update([
            'nama' => $request->nama,
            'nama_perusahaan' => $request->nama_perusahaan,
            'email' => $request->email,
            'no_tlp' => $request->no_tlp,
            'aktifitas' => $request->aktifitas,
            'negara' => $request->negara,
            'kota' => $request->kota,
            'alamat' => $request->alamat,
            'tanggal' => $request->tanggal,
            'medsos' => $request->medsos
        ]);

        //redirect to index
        return redirect()->route('call')->with(['success' => 'Data Berhasil dirunah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //mendapatkan call berdasarkan id
        $call = Call::findOrFail($id);

        //delete call
        $call->delete();

        return redirect()->route('call')->with(['succes' => 'Data Berhasil Dihapus!']);
    }
}
