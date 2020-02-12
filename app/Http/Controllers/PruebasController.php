<?php

namespace App\Http\Controllers;

use App\Events\NewMessage;
use App\Events\pruebasSocket;
use illuminate\Http\Request;



use App\Http\Controllers\Controller;

class PruebasController extends Controller
{

public function pruebaSocket(Request $request){


    $validator = \Validator::make($request->all(), [
        //mirarla las 2 maneras si que envien un formato json o un arreglo
        '*.primary_key'=> 'required',
        '*.longitud' => 'required|max:100',
        '*.latitud' => 'bail|required|max:100',

    ]);
    if ($validator->fails()) {
        return response()->json($errors = $validator->errors()->all(), 400);

    }

//  return response()->json($request->all());

    // return response()->json($supervisor);

    if(count($request->all())>0){

        event(new pruebasSocket($request->all()));

        return response()->json(200);

    }




}


}
