<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/fouad', function () {
    $payload=request()->input('data');
    $data=base64_decode($payload);
    $data=json_decode($data);
    $arrays =  (array) $data;
    $data=Arr::except($arrays, ['dateTime','action']);
    return view('estates',compact(['data']));
});

Route::post('/updateestate', function () {
    $epc=request()->input('epc');
    $token=request()->input('token');
    $url='https://api.whise.eu/v1/estates/updatesubdetails';
    $subdetailId=2089;
    //dd($epc,$token,$url,$subdetailId);
    $response=Http::patch($url)->json(
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




});


