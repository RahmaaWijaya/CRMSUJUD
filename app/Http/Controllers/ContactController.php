<?php

namespace App\Http\Controllers;

use App\Models\Lead; // Pastikan Anda memiliki model Lead
use App\Models\Contact; // Pastikan Anda memiliki model Contact
use Illuminate\Http\Request;

//import return type View
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

//import Facades Storage
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $contacts = Contact::all();
        return view('pages/contact/contacts', compact('contacts'));
    }

    public function save(Request $request) 
    {
        //validasi data jika diperlukan
        $request->validate([
            'lead_id' => 'required|exists:leads,id',
        ]);

        //ambil data dari tabel leads
        $lead = Lead::find($request->leads_id);

        //simpan data contact
        Contact::create([
            'leads_id' =>$leads->leads_id,
            'nama' => $lead->nama,
            'nama_perusahaan' => $lead->nama_perusahaan,
            'email' => $lead->email,
            'no_tlp' => $lead->no_tlp,
            'aktifitas' => $lead->aktifitas,
            'negara' => $lead->negara,
            'kota' => $lead->kota,
            'alamat' => $lead->alamat,
            'waktu' => now(),
            'medsos' => $lead->sosmed,
                //tambahkan fiels
        ]);

        if (empty($lead->no_tlp)) {
            return response()->json(['error' => 'Invalid phone number'], 400);
        }

        //redirect ke WhatsApp
        return redirect()->away('https://wa.me/' . $lead->no_tlp);
    }

    public function edit1()
    {
        //
        return view('pages/contact/edit-contact');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //unutk mendapatkan Contact berdasarkan id
        $contact = Contact::findOrFail($id);
        //render view with contact
        return view('pages/contact/detail-contact', compact('contact'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    
        public function edit2(string $id):View
        {
            //
            $contact = Contact::findOrFail($id);
            return view('pages/contact/edit-data-contact', compact('contact'));
        }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //validasi form
        // $request->validate([
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string',
            'nama_perusahaan' => 'required|string',
            'email' => 'required|email',
            'no_tlp' => 'required|numeric',
            'aktifitas' => 'required|string',
            // 'status' => 'required|string',
            'negara' => 'required|string',
            'kota' => 'required|string',
            'alamat' => 'required|string',
            'waktu_chat' => 'required',
            'medsos' => 'nullable|string'
        ]);
        if ($validator->fails()) {
            dd($validator->errors());
        }

        //mendapatkan contact berdasarkan id
        $contact = Contact::findOrFail($id);
        // dd($request->all());
        //update Contact
        $contact->update([
            'nama' =>$request->nama,
            'nama_perusahaan' =>$request->nama_perusahaan,
            'email' =>$request->email,
            'no_tlp' =>$request->no_tlp,
            'aktifitas' =>$request->aktifitas,
            // 'status' =>$request->status,
            'negara' =>$request->negara,
            'kota' =>$request->kota,
            'alamat' =>$request->alamat,
            'waktu_chat' =>$request->waktu_chat,
            // 'Medsos' =>$request->Medaoa,

        ]);

        //redirect to index
        return redirect()->route('contact')->with(['success' => 'Data Berhasil Dirubah!']);

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
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //mendapatkan contact berdasarkan id
        $contact = Contact::findOrfail($id);

        //delete contact
        $contact->delete();

        return redirect()->route('contact')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
