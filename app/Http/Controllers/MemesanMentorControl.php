<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Mentee;
use App\Models\Transaksi;
use App\Models\Mentor;

class MemesanMentorControl extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function loadOrderForm($id){
        $mentor = Mentor::find($id);
        return view('halaman-order', compact('mentor')) ;
    }

    public function pay($idMentor, Request $request){
        $jumlahSesi = $request->jumlahSesi;
        $description = $request->description;
        
        $mentee = Auth::user();
        $mentor = Mentor::find($idMentor);

        $mentorPrice = $jumlahSesi * ($mentor->price);

        if (($mentee-> saldo) < $mentorPrice){
            return redirect()->back()->with('error','anda tidak punya cukup saldo!');

        } else {
            $saldoBaru = ($mentee->saldo) - $mentorPrice;
            $mentee->saldo = $saldoBaru;
            $mentee->save();

            Transaksi::create([
                'jumlahSesi' => $jumlahSesi,
                'description' => $description,
                'menteeId' => $mentee->id,
                'mentorId' => $idMentor,
            ]);
            
            return view('halaman-utama');
        }


    }
}
