<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SyncController;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/', function () {
    $filePath = base_path('index.html');

    if (File::exists($filePath)) {
        return response()->file($filePath, [
            'Content-Type' => 'text/html',
        ]);
    }

    abort(404, 'Index.html not found');
});


Route::get('customers', [CustomerController::class, 'getCustomers']);
Route::get('customers/{id}', [CustomerController::class, 'getCustomersById']);
Route::post('customers', [CustomerController::class, 'postNewCustomer']);
Route::put('customers/{id}', [CustomerController::class, 'putEditCustomer']);
Route::delete('customers/{id}', [CustomerController::class, 'deleteCustomer']);

Route::get('clients', [ClientController::class, 'getClients']);
Route::get('clients/{id}', [ClientController::class, 'getClientsById']);
Route::post('clients', [ClientController::class, 'postNewClient']);
Route::put('clients/{id}', [ClientController::class, 'putEditClient']);
Route::delete('clients/{id}', [ClientController::class, 'deleteClient']);

Route::get('syncDatabases', [SyncController::class, 'syncDatabases']);

