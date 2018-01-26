<?php

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Reparto;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


/*---------- PRIMERA API -------------*/

Route::get('pedidos', function() {
    return Reparto::all();
});

Route::get('pedidos/{id}', function($id) {
    return Reparto::find($id);
});

Route::post('pedidos', function(Request $request) {
    return Reparto::create($request->all);
});

Route::put('pedidos/{id}', function(Request $request, $id) {
    $pedido = Reparto::findOrFail($id);
    $pedido->update($request->all());

    return $pedido;
});

Route::delete('pedidos/{id}', function($id) {
    Article::find($id)->delete();

    return 204;
});

Route::get('reparto', 'RepartoController@index');
Route::get('reparto/{reparto}', 'RepartoController@show');
Route::post('reparto', 'RepartoController@store');
Route::put('reparto/{reparto}', 'RepartoController@update');
Route::delete('reparto/{reparto}', 'RepartoController@delete');
