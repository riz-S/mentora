<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\DaftarMentor;
use App\Models\Mentor;
use App\Models\Mentee;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $fillable = [
        'jumlahSesi',
        'description',
        'menteeId',
        'mentorId'
    ];

    public function daftarmentor(){
        return $this->belongsTo(DaftarMentor::class, 'mentorId');
    }
    public function mentor(){
        return $this->belongsTo(Mentor::class, 'mentorId');
    }
    public function mentee(){
        return $this->belongsTo(Mentee::class, 'menteeId');
    }
    public function getList($id){
        return self::with('mentor.skill')
            ->where('menteeId', $id)
            ->get();
    }
}
