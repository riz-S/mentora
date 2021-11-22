<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mentee;
use Auth;
use Hash;

class GantiPasswordControl extends Controller
{
    public function __construct(){ 
        //autentikasi akses pengguna
        $this->middleware('auth');
    }

    public function loadChangePass(){
        //load halaman
        return view('halaman-ganti-sandi');
    }

    public function changePass(Request $request){
        $oldPass = $request->oldPass;
        $newPass = $request->newPass;
        if (!(Hash::check($oldPass, Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Password yang anda masukkan tidak sama dengan password lama anda, silahkan coba lagi");
        }

        if(strcmp($oldPass, $newPass) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","Password baru tidak boleh sama dengan password lama.");
        }

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($newPass);
        $user->save();

        return redirect()->back();

    }
}
