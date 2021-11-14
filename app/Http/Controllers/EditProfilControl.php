<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mentee;
use Auth;

class EditProfilControl extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function loadEditProfilPage(){   
        return view('halaman-edit-profil');
    }

    public function requestUbahProfil(Request $request){ 
        $mentee = Auth::user();
        $validatedData = $request->validate([
            'name' => 'required'
        ]);
        $mentee->name = $request->name;
        $mentee->save();

        return back();
    }
}
