<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = ['jenis_kategori', 'nama_kategori'];

    public function galangdana()
    {
        return $this->hasMany(Kategori::class, 'id_kategoricampaign');
    }
}
