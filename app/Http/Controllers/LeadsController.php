<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Imports\LeadImport;
// use App\Lead;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

//import model product
use App\Models\Lead;
use App\Models\Contact; // Pastikan Anda memiliki model Contact

//import return type View
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class LeadsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // untuk ke bagain leads
        //get all leads
        //get all products
        // $Lead = Lead::latest()->paginate(10);
        $leads = Lead::all();
        // dd($leads->toArray());
        return view('pages.leads.leads', compact('leads'));
        return view('components/leads/leads-table', compact('leads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        //
        return view('pages/leads/create-leads');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): Redirectresponse
    {
        //validasi form
        // $request->validate([
        $validator = Validator::make($request->all(), [
            'nama'                => 'required|string',
            'nama_perusahan'      => 'required|string',
            'email'               => 'required|email',
            'no_tlp'               => 'required|numeric',
            'negara'             => 'required|string',
            'kota'                => 'required|string',
            'alamat'             => 'required|string',
            'sosmed'              =>'nullable|string',
            'waktu'              => 'required',
            'status'              => 'required|string',
        ]);

        if ($validator->fails()) {
            dd($validator->errors()); // Debugging untuk menampilkan pesan error jika validasi gagal
        }

        //model lead
        Lead::create([
            'nama' => $request->nama,
            'nama_perusahan' => $request->nama_perusahan,
            'email' => $request->email,
            'no_tlp' => $request->no_tlp,
            'negara' => $request->negara,
            'kota' => $request->kota,
            'alamat' => $request->alamat,
            'sosmed' => $request->sosmed,
            'waktu' => $request->waktu,
            'status' => $request->status,
        ]);

        //redirect to index
        return redirect()->route('leads')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function import()
    {
        //
        return view('pages/leads/import-leads');
    }
    public function import1(Request $request)
    {
        //
         // Validasi file dan status
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx',
            // 'status' => 'required|in:leads,buyer,customer,reseller',
        ]);

        // Mengambil file yang diunggah
        $file = $request->file('file');

        // Membuat nama file unik
        $nama_file = $file->hashName();

        // Simpan sementara di storage (public/excel)
        $path = $file->storeAs('public/excel/', $nama_file);

        try {
            // Proses import data dari file yang sudah diunggah
            Excel::import(new LeadImport(), storage_path('app/public/excel/'.$nama_file));

            // Hapus file dari server setelah import sukses
            // Storage::delete($path);

            // Redirect dengan pesan sukses
            return redirect()->route('leads')->with(['success' => 'Data Berhasil Diimport!']);
        } catch (\Exception $e) {
            // Jika ada error, tampilkan pesan error
            dd($e->getMessage());
            return redirect()->route('leads')->with(['error' => 'Data Gagal Diimport! Error: ' . $e->getMessage()]);
        }
    }

    public function edit1()
    {
        //
        return view('pages/leads/edit-data-leads');
    }

    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //untuk mendapatkan lead berdasarkan id
        $lead = Lead::findOrFail($id);

        //render view with lead
        return view('pages/leads/detail-leads', compact('lead'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        //untuk mednapatkan lead berdasarkan id
        $lead = Lead::findOrFail($id);

        //render view with lead
        return view('pages/leads/edit-data-leads', compact('lead'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //validate form
        // $request->validate([
        $validator = Validator::make($request->all(), [
            'nama'                => 'required|string',
            'nama_perusahan'      => 'required|string',
            'email'               => 'required|email',
            'no_tlp'               => 'required|numeric',
            'negara'             => 'required|string',
            'kota'                => 'required|string',
            'alamat'             => 'required|string',
            'sosmed'              =>'nullable|string',
            'waktu'              => 'required',
            'status'              => 'required|string',
        ]);
        if ($validator->fails()) {
            dd($validator->errors()); // Debugging untuk menampilkan pesan error jika validasi gagal
        }
        // Setelah validasi
        // dd($request->all());

        //mendaparkan lead berdasarkan id
        $lead = Lead::findOrFail($id);

        //update lead
        $lead->update([
            'nama' => $request->nama,
            'nama_perusahan' => $request->nama_perusahan,
            'email' => $request->email,
            'no_tlp' => $request->no_tlp,
            'negara' => $request->negara,
            'kota' => $request->kota,
            'alamat' =>$request->alamat,
            'sosmed' =>$request->sosmed,
            'waktu' =>$request->waktu,
            'status' =>$request->status,
        ]);

        //redirect ti index
        return redirect()->route('leads')->with(['success' => 'Data Berhasil Diubah!']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //mendapatkan lead berdasarkan id
        $lead = Lead::findOrFail($id);

        //deletel lead
        $lead->delete();

        return redirect()->route('leads')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    public function copyToContact($id): RedirectResponse
    {
        // dd($id); 
        // Debug nilai ID
        // Cari data dari tabel `leads` berdasarkan ID
        $lead = Lead::findOrFail($id);

         // Debug lead ID
        // dd($lead->id);

        // Salin data ke tabel `contact`
        Contact::create([
            'leads_id' => $lead->leads_id,
            'nama' => $lead->nama,
            'nama_perusahaan' => $lead->nama_perusahan,
            'email' => $lead->email,
            'no_tlp' => $lead->no_tlp,
            'aktifitas' =>'Penawaran',
            'negara' => $lead->negara,
            'kota' => $lead->kota,
            'alamat' => $lead->alamat,
            'waktu_chat' =>now(),
            'status' => $lead->status,
            'medsos' => $lead->sosmed,
        ]);

        // Redirect kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Data successfully copied to contacts!');
    }
}
