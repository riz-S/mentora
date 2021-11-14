<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use Auth;
class StatusPemesananControl extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function loadStatusPemesananPage(){
        $menteeId = Auth::id();
        $listTransaksi = Transaksi::getList($menteeId);
        if (count($listTransaksi)==0){
            return view('status-pemesanan', ['listTransaksi' => 'empty']);
        }
        else 
        return view('status-pemesanan', ['listTransaksi' => $listTransaksi]);
    }



}
