<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Skill;
use App\Models\Transaksi;

class Mentor extends Model
{
    use HasFactory;
    protected $table = 'mentor';

    public function getProfil($id){
        return self::with('category','skill')
        ->withCount(['transaksi' => function ($query){
            $query->where('statusPemesanan', '=','Diterima');
        }])
        ->find($id);
    }

    public function category(){
        return $this->belongsTo(Category::class, 'categoryId');
    }

    public function skill(){
        return $this->belongsToMany(Skill::class,'mentorskill','mentorId','skillId');
    }

    public function transaksi(){
        return $this->hasMany(Transaksi::class, 'mentorId');
    }
}
