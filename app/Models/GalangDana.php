<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalangDana extends Model
{
    use HasFactory;
    protected $with = ['user'];
    protected $guarded = ['id', 'is_active'];
    protected $table = 'programgalangdana';
    protected $fillable = ['id_user', 'kategori_galangdana', 'persetujuan_galangdana', 'nama', 'nomor_hp', 'pekerjaan', 'tempat_kerja', 'nama_kegiatan', 'tujuan_kegiatan', 'lokasi', 'gambar', 'targetdonasi', 'batas_waktu', 'tanggal_mulai', 'rincian_galangdana', 'judul', 'deskripsi'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
