<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftaranBeasiswa extends Model
{
    use HasFactory;
    protected $with = ['user', 'kategoribeasiswa'];
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_peserta');
    }

    public function kategoribeasiswa()
    {
        return $this->belongsTo(Kategoribeasiswa::class, 'id');
    }
}
