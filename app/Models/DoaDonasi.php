<?php

namespace App\Models;

use App\Models\GalangDana;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DoaDonasi extends Model
{
    use HasFactory;
    protected $with = ['galangdana'];
    protected $fillable = ['id_galangdana', 'nama', 'deskripsi_doa'];

    //melakukan join
    public function galangdana()
    {
        return $this->belongsTo(GalangDana::class, 'id_galangdana', 'id');
    }
}
