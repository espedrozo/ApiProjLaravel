<?php
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

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
    $filePath = base_path('index.html');

    if (File::exists($filePath)) {
        return response()->file($filePath, [
            'Content-Type' => 'text/html',
        ]);
    }

    abort(404, 'Index.html not found');
});
