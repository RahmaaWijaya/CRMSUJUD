<?php

namespace App\Imports;

use App\Models\Lead;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithValidation;

use Illuminate\Validation\Rule;

class LeadImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    
    public function model(array $row)
    {
        \Log::info('Row data:', $row);
        // dd($row);
        return new Lead([
            //
            'nama' => $row[1],
            'nama_perusahan' => $row[2],
            'email' => $row[3],
            'no_tlp' => $row[4],
            'negara' => $row[5],
            'kota' => $row[6],
            'alamat' => $row[7],
            'sosmed' => $row[8],
            'status' => $row[9], // Validasi status
            'waktu' => now(),
            
        ]);
    }
    
}
