<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pribadi extends Model
{
    // use HasFactory;
    protected $table = 'transaksi_pribadi';
    protected $fillable = [
        'id_bus', 'id_jadwal','nama_user','email','shuttle_asal','shuttle_tujuan','jam_mulai','tgl_jadwal','total_bayar','bukti_bayar','validasi'
    ];
}
