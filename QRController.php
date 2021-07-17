<?php

namespace App\Http\Controllers;
use App\Http\Controllers\QRController;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRController extends Controller
{


public function index(Request $q)
{
    
    $code = $q->qwery;
    return view('first.qrcode2')->with('code', $code);


}

public function show()
{
    
    return view('first.qrcode');

}

public function testing(Request $q){

    $code = $q->qwery;
    return view('first.qrcode2')->with('code', $code);

}

}
