<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

class TestController extends Controller
{
    //getData From WeebHooks and displayed into view
    public function getData()
    {
        $payload=request()->input('data');
        $data=base64_decode($payload);
        $data=json_decode($data);
        $arrays =  (array) $data;
        $data=Arr::except($arrays, ['dateTime','action']);
        return view('estates',compact(['data']));
    }
    // updateEstate
    public function updateestate()
    {
        $epc=request()->input('epc');
        $token=request()->input('token');
        $url='https://api.whise.eu/v1/estates/updatesubdetails';
        $subdetailId=2089;
        //dd($epc,$token,$url,$subdetailId);
        $response=Http::patch($url,
            array (
                'Token' => $token,
                'Subdetails' =>
                    array (
                        0 =>
                            array (
                                'SubdetailId' => $subdetailId,
                                'Value' => $epc,

                            ),
                    ),
            )

        );

        return $response->json();

    }
}
