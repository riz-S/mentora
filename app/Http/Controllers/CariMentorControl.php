<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DaftarMentor;
use App\Models\Mentor;
use App\Models\Skill;
use App\Models\Category;

class CariMentorControl extends Controller
{
    public function showCariPage(){
        $listMentor = DaftarMentor::random();
        $listSkill = Skill::all();
        $listCategory = Category::all();
        return view('halaman-cari-mentor', ['listMentor' => $listMentor, 'skills' => $listSkill, 'categories' => $listCategory, 
        'keyword'=>'','sort' =>'', 'filterCategory'=>'', 'filterSkill'=>[],'filterHarga'=>'']);
    }

    public function getMentors(Request $request){
        $keyword = $request->keyword;
        $daftarMentor = DaftarMentor::search($keyword);
        $listSkill = Skill::all();
        $listCategory = Category::all();
        if(!empty($daftarMentor)){
            return view('halaman-cari-mentor', ['listMentor' => $daftarMentor,'skills' => $listSkill, 'categories' => $listCategory, 
            'keyword'=>$keyword, 'sort' =>'', 'filterCategory'=>'', 'filterSkill'=>[],'filterHarga'=>'']);
        } else{
            return view('halaman-cari-mentor',['listMentor' => 'empty','skills' => $listSkill, 'categories' => $listCategory, 
            'keyword'=>$keyword, 'sort' =>'', 'filterCategory'=>'', 'filterSkill'=>[],'filterHarga'=>'']);
        }
    }

    public function loadProfilMentor($id){
        $profilMentor = Mentor::getProfil($id);
        return view('lihat-profil',['mentor'=>$profilMentor]);
    }
}
