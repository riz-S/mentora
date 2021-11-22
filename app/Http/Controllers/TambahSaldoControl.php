<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mentee;
use App\Models\Voucher;
use Auth;

class TambahSaldoControl extends Controller
{
    public function loadSaldoPage(){
        return view('halaman-saldo');

    }
    public function tambahSaldo(Request $request){
        $kode = $request->kode;
        $voucher = Voucher::where('kode',$kode)->first();
        if($voucher==null||$voucher->statusPakai==1){
            return redirect()->back()->with("error","Oh no! Voucher is invalid");
        }
        $mentee = Auth::user();
        $mentee->saldo += $voucher->balance;
        $mentee -> save();
        $voucher-> statusPakai =1;
        $voucher-> save();

        return view('halaman-saldo');
    }
}
