<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [
        'id',
    ];
    protected $fillable = [
        'name',
        'email',
        'password',
        'NIK',
        'nomor_hp',
        'alamat_rumah',
        'jenis_pekerjaan',
        'tempat_bekerja',
        'fotodiri',
        'ktp'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function galangdana()
    {
        return $this->hasMany(GalangDana::class, 'id_user');
    }

    protected static function boot()
    {
        parent::boot();

        // Define the 'creating' event handler
        static::creating(function ($user) {
            $lastId = static::max('id');

            // Extract the last two digits of the year (YY)
            $year = date('ym');

            // Get the sequence number from the last ID and increment it
            $sequenceNumber = ($lastId ? (int) substr($lastId, -6) : 0) + 1;

            // Generate the formatted ID with leading zeros
            $idUser = $year . str_pad($sequenceNumber, 6, '0', STR_PAD_LEFT);

            $user->id = $idUser;
        });
    }
}
