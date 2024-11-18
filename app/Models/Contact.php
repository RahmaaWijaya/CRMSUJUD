<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table ="contact";
    protected $primaryKey ='contact_id';
    protected $fillable = [
        'leads_id',
        'nama',
        'nama_perusahaan',
        'email',
        'no_tlp',
        'aktifitas',
        'status',
        'negara',
        'kota',
        'alamat',
        'waktu_chat',
        'medsos'
    ];
}
