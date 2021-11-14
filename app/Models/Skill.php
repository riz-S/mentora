<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DaftarMentor;
use App\Models\Mentor;

class Skill extends Model
{
    use HasFactory;
    protected $table = 'skill';
    public $timestamps = false;

    public function daftarmentor(){
        return $this->belongsToMany(DaftarMentor::class,'mentorskill','skillId', 'mentorId');
    }
    
    public function mentor(){
        return $this->belongsToMany(Mentor::class,'mentorskill','skillId', 'mentorId');
    }
}
