<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalangDana extends Model
{
    use HasFactory;
    protected $with = ['user', 'kategorigalangdana'];
    protected $guarded = ['id', 'is_active'];
    protected $table = 'programgalangdana';
    protected $fillable = ['id_user', 'id_kategoricampaign', 'judul_campaign', 'lokasi_campaign', 'tujuan_campaign', 'targetdonasi_campaign', 'rinciandana_campaign', 'deskripsi_campaign', 'foto_campaign', 'tanggal_mulai', 'tanggal_akhir', 'praturan_campaign', 'nama_bank', 'nomor_rekening', 'pemilik_rekening'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function Kategorigalangdana()
    {
        return $this->belongsTo(Kategorigalangdana::class, 'id_kategoricampaign');
    }
}
