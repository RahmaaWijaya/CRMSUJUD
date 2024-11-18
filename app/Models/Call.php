<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
    use HasFactory;
    protected $table = 'calls_';
    protected $primaryKey = 'calls_id';
    protected $fillable = [
        'contact_id',
        'nama',
        'nama_perusahaan',
        'email',
        'no_tlp',
        'aktifitas',
        'status',
        'negara',
        'kota',
        'alamat',
        'tanggal',
        'medsos'
    ];
}
