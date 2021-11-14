<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Transaksi;

class Mentee extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'mentee';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    protected $hidden = [
        'password',
    ];

    public function transaksi(){
        return $this->hasMany(Transaksi::class, 'menteeId');
    }
}
