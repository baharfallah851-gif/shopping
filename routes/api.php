<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\LoginController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//login
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {

//logout
    Route::post('/logout', [AuthController::class, 'logout']);

//customer
    Route::middleware('auth:sanctum')->prefix('customer')->controller(\App\Http\Controllers\Api\CustomerController::class)->group(function () {
        Route::post('/save', 'save');
        Route::get('/', 'index');

        Route::get('/edit/{customer}', 'edit');
        Route::post('/update/{customer}', 'update');
        Route::delete('/delete/{customer}', 'delete');
    });

});
//user resource
Route::middleware('auth:sanctum')->get('/users', [\App\Http\Controllers\Api\UserController::class, 'index']);














//Route::post('/login', function (Request $request) {            //postman
//    $request->validate([
//        'username' => 'required|string',
//        'password' => 'required|string',
//        'device_name' => 'required|string',
//    ]);
//
//    $user = User::where('username', $request->username)->first();
//
//    if (! $user || ! Hash::check($request->password, $user->password)) {
//        throw ValidationException::withMessages([
//            'username' => ['The provided credentials are incorrect.'],
//        ]);
//    }
//
//    return [
//        'success' => true,
//        'token' => $user->createToken($request->device_name)->plainTextToken
//    ];
//});

//
//Route::middleware('auth:sanctum')->post('/logout', function (Request $request) {
//    // حذف توکن جاری
//    $request->user()->currentAccessToken()->delete();
//
//    return response()->json(['message' => 'Logged out successfully']);
//});


//
//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');
//
