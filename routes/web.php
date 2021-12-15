<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PersonController;

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

Route::get('/our-gallery', function () {
    return Inertia\Inertia::render('OurGallery');
})->name('our-gallery');

Route::get('/contact-us', function () {
    return Inertia\Inertia::render('ContactUs');
})->name('contact-us');

Route::get('/example', function () {
    return Inertia\Inertia::render('Example');
})->name('example');

Route::get('/notices', function () {
    return Inertia\Inertia::render('Notices/Index');
})->name('notices');

Route::get('/services', function () {
    return Inertia\Inertia::render('Services/Index');
})->name('services');

Route::get('/gallery', function () {
    return Inertia\Inertia::render('Gallery/Index');
})->name('gallery');


Route::resource('posts', PostController::class);

Route::get('/role/all', [RoleController::class, 'all']);
Route::post('/role/assign/permissions', [RoleController::class, 'assignPermissions']);
Route::get('/role/{name}/permissions', [RoleController::class, 'getPermissions']);
Route::resource('role', RoleController::class);

Route::resource('user', UserController::class);
Route::resource('person', PersonController::class);

Route::get('/permission/all', [PermissionController::class, 'all']);
Route::resource('permission', PermissionController::class);

Route::resource('products', ProductController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');

Route::get('/find/{page}/{folder?}', function ($page, $folder) {
    $directory = base_path() . '/resources/images/' . $page . '/' . $folder;
    $dirint = dir($directory);
    $images = array();
    while (($archivo = $dirint->read()) !== false) {
        if ($archivo != "." && $archivo != "..") {
            array_push($images, $archivo);
        }
    }
    $dirint->close();
    return json_encode($images);
});

Route::get('/src/{page}/{folder?}/{filename}', function ($page, $folder = "null", $filename) {
    try {
        $path = '';
        if ($folder == "null") {
            $path = base_path() . '/resources/images/' . $page . '/' . $filename;
        } else {
            $path = base_path() . '/resources/images/' . $page . '/' . $folder . '/' . $filename;
            //$path = storage_path() . '/app/' . $folder . '/' . $filename;
        }
        $file = File::get($path);
        $type = File::mimeType($path);

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;


    } catch (Throwable $th) {
        return $th->getMessage();
    }
});
