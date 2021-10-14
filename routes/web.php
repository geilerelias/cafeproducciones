<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;

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

Route::get('/app-bar', function () {
    return Inertia\Inertia::render('AppBar');
});

Route::get('/app-bar2', function () {
    return Inertia\Inertia::render('AppBar2');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return Inertia\Inertia::render('Home');
})->name('home');

Route::get('/about-us', function () {
    return Inertia\Inertia::render('AboutUs');
})->name('about-us');

Route::get('/our-services', function () {
    return Inertia\Inertia::render('OurServices');
})->name('our-services');

Route::get('/gallery', function () {
    return Inertia\Inertia::render('Gallery');
})->name('gallery');

Route::get('/contact-us', function () {
    return Inertia\Inertia::render('ContactUs');
})->name('contact-us');

Route::get('/example', function () {
    return Inertia\Inertia::render('Example');
})->name('example');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');

Route::get('/services/{id}', [ServiceController::class, 'getImages']);

Route::get('storage/{folder}/{filename}', function ($folder, $filename) {
    try {
        $path = storage_path() . '/app/' . $folder . '/' . $filename;

        //si no se encuentra lanzamos un error 404.
        if (!Storage::exists($folder . '/' . $filename)) {
            abort(404);
        }

        $file = File::get($path);
        $type = File::mimeType($path);

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);
        return $response;
    } catch (\Throwable $th) {
        return $th->getMessage();
    }
});
