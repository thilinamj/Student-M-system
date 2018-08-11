<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use Illuminate\Support\Facades\Response;

use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\LabelAlignment;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Response\QrCodeResponse;

class ChartController extends Controller
{
    public function getMember(Request $request){
       
        $qrCode = new QrCode('Life is todfddfo short to be generating QR codes');
        $qrCode->setSize(300);
        $qrCode->setWriterByName('png');

        
    
        header('Content-Type: '. $qrCode->writeFile(__DIR__.'/../qrcode.png'));
      
        echo $qrCode->writeString();
        
      

}
}