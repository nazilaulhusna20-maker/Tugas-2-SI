    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\PageController;

    Route::get('/', [PageController::class, 'home']);
    Route::get('/about', [PageController::class, 'about']);
    Route::get('/contact', [PageController::class, 'contact']);
    Route::get('/service', [PageController::class, 'service']);
    Route::get('/gallery', [PageController::class, 'gallery']);

