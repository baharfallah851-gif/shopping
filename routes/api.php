<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/login', function (Request $request) {               //postman
    $request->validate([
        'username' => 'required|string',
        'password' => 'required|string',
        'device_name' => 'required|string',
    ]);
    $user = User::where('username', $request->username)->first();
    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'username' => ['The provided credentials are incorrect.'],
        ]);
    }
    return [
        'success' => true,
        'token' => $user->createToken($request->device_name)->plainTextToken
    ];
});




Route::middleware('auth:sanctum')->post('/logout', function (Request $request) {
    // حذف توکن جاری
    $request->user()->currentAccessToken()->delete();

    return response()->json(['message' => 'Logged out successfully']);
});















//
//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');
//
