<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendaftaran_beasiswa extends Model
{
    use HasFactory;
    protected $with = ['user', 'kategoribeasiswa'];
    protected $fillable = [
        'id_peserta', 'id_kategoribeasiswa', 'nama_depan', 'nama_belakang', 'email',
        'nomor_hp', 'kelurahan', 'kecamatan', 'kabupaten', 'RT', 'RW', 'provinsi', 'nomor_identitas',
        'ratarata_nilai', 'semester', 'kartu_identitas', 'kartu_keluarga', 'ktp_peserta', 'ktp_orangtuapeserta', 'foto_peserta', 'sertifikat_peserta'
    ];
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_peserta');
    }

    public function kategoribeasiswa()
    {
        return $this->belongsTo(Kategoribeasiswa::class, 'id_kategoribeasiswa');
    }
}
