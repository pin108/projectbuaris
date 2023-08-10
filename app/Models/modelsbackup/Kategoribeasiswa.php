<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategoribeasiswa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = ['jenis_kategoribeasiswa', 'judul_kategoribeasiswa', 'deskripsi_beasiswa', 'tanggal_pendaftaranawal', 'tanggal_pendaftaranakhir', 'tanggal_wawancara', 'tanggal_pengumuman'];

    public function pendaftaranbeasiswa()
    {
        return $this->hasMany(Kategoribeasiswa::class, 'id_kategoribeasiswa');
    }
}
