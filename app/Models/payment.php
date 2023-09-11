<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    protected $with = ['galangdana', 'user'];
    protected $fillable = [
        'user_id', 'id_galangdana', 'total', 'buktitransaksi', 'invoice_code', 'status'
    ];

    public function galangdana()
    {
        return $this->belongsTo(GalangDana::class, 'id_galangdana');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
