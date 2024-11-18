<?php

namespace App\Imports;

use App\Models\Deal;
use Maatwebsite\Excel\Concerns\ToModel;

class DealsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Deal([
            //
            'nama' => $row[0],
            'deskripsi' => $row[1],
            'status' => $row[2],
            'jumlah' => is_numeric(str_replace('.', '', $row[3])) ? (float)str_replace('.', '', $row[3]) : 0,
            'waktu' => now(),
        ]);
    }
}
