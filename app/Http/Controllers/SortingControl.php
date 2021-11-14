<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mentor;
use App\Models\Skill;
use App\Models\Category;

class SortingControl extends Controller
{   
    public function sortListMentor(Request $request){
        $listMentor = json_decode($request->listMentor);
        $listSkill = Skill::all();
        $listCategory = Category::all();
        $keyword = $request->keyword;
        $filters = json_decode($request->filters);
        $sortType = $request->sort;
        switch ($sortType) {
            case 'Most Experienced':
                $mostExp = function($a,$b){ return -($a->transaksi_count <=> $b->transaksi_count);};
                usort($listMentor,$mostExp);
                break;
            case 'Newest':
                $newest = function($a,$b){ return -($a->created_at <=> $b->created_at);};
                usort($listMentor,$newest);
                break;
            case 'Cheapest':
                $cheapest = function($a,$b){ return ($a->price <=> $b->price);};
                usort($listMentor,$cheapest);
                break;
        }
        return view('halaman-cari-mentor', ['listMentor' => $listMentor,'skills' => $listSkill, 'categories' => $listCategory, 
            'keyword'=>$keyword, 'sort' =>$sortType, 'filterCategory'=>$filters[0], 'filterSkill'=>$filters[1],'filterHarga'=>$filters[2]]);
    }
    
}
