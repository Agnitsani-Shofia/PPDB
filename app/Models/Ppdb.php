<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppdb extends Model
{
    use HasFactory;
    protected $table = 'ppdbs';
    protected $fillable = [
         'No_Tes','Nama_Lengkap', 'JK', 'TTL', 'Agama', 'Cita_Cita' ,'Hobi', 'Anak_ke', 'Jumlah_Saudara','Tinggi_Badan','Berat_Badan', 'Golongan_Darah'
        ];
        }
