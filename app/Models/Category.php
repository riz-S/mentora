<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DaftarMentor;
use App\Models\Mentor;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';
    public $timestamps = false;

    public function daftarmentor(){
        return $this->hasMany(DaftarMentor::class, 'categoryId');
    }
    
    public function mentor(){
        return $this->hasMany(Mentor::class, 'categoryId');
    }
}
