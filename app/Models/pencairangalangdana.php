<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pencairangalangdana extends Model
{
    use HasFactory;
    protected $with = ['galangdana'];
    protected $fillable = [
        'id_galangdana', 'user_id', 'nama_penggalangdana', 'judul_galangdana', 'jumlah', 'foto_pencairan', 'foto_penyerahan'
    ];

    public function galangdana()
    {
        return $this->belongsTo(admingalangdana::class, 'id_galangdana');
    }
}
