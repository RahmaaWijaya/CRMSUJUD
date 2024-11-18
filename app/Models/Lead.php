<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;
    protected $table = "leads";
    protected $primaryKey = 'leads_id';
    protected $fillable = [
        'nama',
        'nama_perusahan',
        'email',
        'no_tlp',
        'negara',
        'kota',
        'alamat',
        'sosmed',
        'waktu',
        'status'
    ];
    protected $casts = [
        'waktu' => 'datetime',
    ];
}
