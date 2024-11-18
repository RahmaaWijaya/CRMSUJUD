<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    use HasFactory;
    protected $table = "deals";
    protected $primaryKey = 'deals_id';
    protected $fillable = [
        'contacts_id',
        'nama',
        'deskripsi',
        'status',
        'jumlah',
        'waktu',
    ];

}
