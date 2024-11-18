<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Contact;
use App\Models\Call;
use Carbon\Carbon;

class CopyContactToCall extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'contact:copy-contact-to-call';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Copy contacts to call table if waktu_chat is more than three days ago';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Ambbil data contacts yang 'waktu_chat' sudah lebih dari tiga hari
        $threeDaysAgo = Carbon::now()->subDays(3);
        $contacts = Contact::where('waktu_chat', '<', $threeDaysAgo)->get();

        foreach ($contacts as $contact) {
            //Salin data ke tabel 'call'
            Call::create([
                'contact_id' => $contact->contact_id,
                'nama' => $contact->nama,
                'nama_perusahaan' => $contact->nama_perusahaan,
                'email' => $contact->email,
                'no_tlp' => $contact->no_tlp,
                'aktifitas' => $contact->aktifitas,
                'status' => $contact->status,
                'negara' => $contact->negara,
                'kota' => $contact->kota,
                'alamat' => $contact->alamat,
                'tanggal' => Carbon::now(),
                'medsos' => $contact->medsos,
            ]);
        }

        $this->info('Contacts copied to call table if waktu_chat is more than three days old.');
    }
}
