<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DaftarMentor;
use App\Models\Mentor;
use App\Models\Skill;
use App\Models\Category;

class FilterMentorControl extends Controller
{
    public function filterInput(Request $request){
        $listSkill = Skill::all();
        $listCategory = Category::all();
        $keyword = $request->keyword;
        $sort = $request->sort;
        $listMentor = is_array(json_decode($request->listMentor))?json_decode($request->listMentor):array(json_decode($request->listMentor));
        $kategori = $request->filterCategory;
        $skill = $request->filterSkill;
        $rentangHarga = $request->filterHarga;
        if($kategori!=null){
            $category = function ($var) use ($kategori) {return $var->category->name == $kategori;};
            $listMentor = array_values(array_filter($listMentor, $category));
        }
        if($skill!=null){
            $skill = function ($var) use ($skill) {
                $count = 0;
                foreach($var->skill as $skil){
                    if(in_array($skil->name, $skill)) $count++;
                }
                return $count==sizeof($skill);
            };
            $listMentor = array_values(array_filter($listMentor, $skill));
        }
        if($rentangHarga!=null){
            $rentangHarga = explode(",",$rentangHarga);
            $range = function ($var) use ($rentangHarga) {return $var->price >= $rentangHarga[0] && $var->price <= $rentangHarga[1];};
            $listMentor = array_values(array_filter($listMentor, $range));
        }
        if(!empty($listMentor)){
            return view('halaman-cari-mentor', ['listMentor' => $listMentor,'skills' => $listSkill, 'categories' => $listCategory, 
            'keyword'=>$keyword, 'sort' =>$sort, 'filterCategory'=>$kategori, 'filterSkill'=>($skill==null)?[]:$request->filterSkill,'filterHarga'=>$request->filterHarga]);
        } else{
            return view('halaman-cari-mentor', ['listMentor' => 'empty','skills' => $listSkill, 'categories' => $listCategory, 
            'keyword'=>$keyword, 'sort' =>$sort, 'filterCategory'=>$kategori, 'filterSkill'=>($skill==null)?[]:$request->filterSkill,'filterHarga'=>$request->filterHarga]);
        }
    }
}
