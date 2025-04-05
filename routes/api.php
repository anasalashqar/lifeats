<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
// use App\Http\Controllers\UserController
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\MealController;
use App\Http\Controllers\Admin\SubscriptionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MealCategoryController;
use App\Http\Controllers\Admin\UserSubscriptionController;
use App\Http\Controllers\Admin\MealSelectionController;
use App\Http\Controllers\Admin\MealScheduleController;
use App\Http\Controllers\Admin\PaymentController;


//----------------------------------------------------------------
// Tuqa Section
// Public routes for registration and login
Route::post('/register', [RegisteredUserController::class, 'registerUser']);
Route::post('/login', [AuthenticatedSessionController::class, 'loginUser']);

// Logout route
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth:sanctum');
// Sanctum protected routes
Route::middleware('auth:sanctum')->group(function () {

    Route::put('/user', [App\Http\Controllers\UserController::class, 'updateUserProfile']);
    Route::get('/user', [App\Http\Controllers\UserController::class, 'getUserProfile']);
    Route::post('/user-subscriptions/subscribe', [App\Http\Controllers\UserSubscriptionController::class, 'storeWithAutoSchedule']);


    Route::post('/meal-selections/select', [\App\Http\Controllers\MealSelectionController::class, 'selectMeal']);

    Route::post('/meal-selections/submit', [\App\Http\Controllers\MealSelectionController::class, 'submitSelection']);
    Route::post('/ml/confirm', [App\Http\Controllers\MealSelectionController::class, 'confirmsDay']);
});
Route::get('/user-subscriptions/{user_id}/schedule', [App\Http\Controllers\UserSubscriptionController::class, 'getUserSchedule']);

//----------------------------------------------------------------




// For TESTing purposes
// --------------------------------------------------------------------
// Route::apiResource('products', ProductsController::class);
Route::post('/products', [ProductsController::class, 'store']);
Route::get('/products', [ProductsController::class, 'index']);
Route::get('/products/{id}', [ProductsController::class, 'show']);
Route::put('/products/{id}', [ProductsController::class, 'update']);
Route::patch('/products/{id}', [ProductsController::class, 'update']);
Route::delete('/products/{id}', [ProductsController::class, 'destroy']);
// --------------------------------------------------------------------
// END


// User Management (Admin Panel)
Route::apiResource('admin/users', UserController::class);
// ->middleware(['auth', 'admin']); // enable later when ready
// GET     /admin/users           → index()    → Get all users
// POST    /admin/users           → store()    → Create a new user
// GET     /admin/users/{id}      → show()     → Get a specific user by ID
// PUT     /admin/users/{id}      → update()   → Update entire user (usually same as PATCH)
// PATCH   /admin/users/{id}      → update()   → Update specific fields
// DELETE  /admin/users/{id}      → destroy()  → Delete a user

Route::apiResource('admin/meals', MealController::class);

Route::apiResource('admin/meal-categories', MealCategoryController::class);

Route::apiResource('admin/subscriptions', SubscriptionController::class);

Route::apiResource('admin/user-subscriptions', UserSubscriptionController::class);

Route::apiResource('admin/meal-selections', MealSelectionController::class)->except(['destroy']);

Route::apiResource('admin/meal-schedules', MealScheduleController::class)->only(['index', 'show']);

Route::apiResource('admin/payments', PaymentController::class)->only(['index', 'show']);


// ------------------------------------------------------------
// Saheb – User Subsicription controls (User Side)

Route::get('/subscriptions', [App\Http\Controllers\SubscriptionController::class, 'index']);
Route::get('/subscription-status', [App\Http\Controllers\SubscriptionController::class, 'getSubscriptionStatus']);
// ------------------------------------------------------------


// ------------------------------------------------------------
// Qutaiba – Meals & Schedule APIs (User Side)

// Meal Category Routes (CRUD)
Route::get('/meal-categories', [\App\Http\Controllers\MealCategoryController::class, 'getMealCategories']);

// Meal Routes 
Route::get('/meals/category/{id}', [\App\Http\Controllers\MealController::class, 'getMealsByCategory']);
Route::get('/meals/date/{date}', [\App\Http\Controllers\MealController::class, 'getMealsByDate']);
Route::apiResource('meals', \App\Http\Controllers\MealController::class);

// Meal Schedule Routes
Route::get('/schedule/{userId}', [\App\Http\Controllers\MealScheduleController::class, 'getSchedule']);

// Meal Selection Routes (CRUD)
Route::apiResource('meal-selections', \App\Http\Controllers\MealSelectionController::class);
Route::post('/meal-selections/select/{userId}/{date}', [\App\Http\Controllers\MealSelectionController::class, 'selectMealForDate']);

// ------------------------------------------------------------