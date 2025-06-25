<?php
use Illuminate\\Support\\Facades\\Route;

Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/emotion-inputs', [EmotionInputController::class, 'store']);
    Route::get('/emotion-patterns', [EmotionPatternController::class, 'index']);
    Route::get('/insights', [InsightController::class, 'index']);
});
