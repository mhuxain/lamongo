<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/{col}', function ($col) {
    $data = DB::collection($col)->get();
    $resp = [];
    foreach($data as $item) {
        $item['__id'] = (string) $item['_id'];
        $resp[] = $item;
    }
    return $resp;
});

Route::get('/{col}/{id}', function ($col, $id) {
    $data = DB::collection($col)->find($id);

    $data['__id'] = (string) $data['_id'];
    return Response::json($data);
});

Route::post('/{col}', function ($col) {
    $data = Input::all();
    $resp = DB::collection($col)->insert($data);
    dd($resp);
});

Route::delete('/{col}/{id}', function ($col, $id) {
//    dd($id);
    $resp = DB::collection($col)->where('_id','=',$id)->delete();
    dd($resp);
});


Route::patch('/{col}/{id}', function ($col, $id) {
//    dd($id);
    $data = Request::all();
    
//    dd($data);
    $resp = DB::collection($col)->where('_id','=',$id)
                       ->update($data);
    return $resp;
});




