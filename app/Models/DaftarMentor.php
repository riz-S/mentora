<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Skill;
use App\Models\Transaksi;

class DaftarMentor extends Model
{
    use HasFactory;
    protected $table = 'mentor';

    public function random(){
        return self::with('category','skill')
                ->withCount('transaksi')
                ->inRandomOrder()
                ->limit(10)
                ->get();
    }

    public function search($keyword){
        return self::with('category','skill')
            ->withCount(['transaksi' => function ($query){
                $query->where('statusPemesanan', '=','Diterima');
            }])
            ->where('mentor.name','like',"%$keyword%")
            ->orWhereHas('category', function ($query) use ($keyword){
                $query->where('name','like',"%$keyword%");
            })
            ->orWhereHas('skill', function ($query) use ($keyword){
                $query->where('name','like',"%$keyword%");
            })
            ->get();
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
