<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'id_galangdana', 'total', 'buktitransaksi', 'invoice_code'
    ];

}
