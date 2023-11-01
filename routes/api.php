<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountsManagementController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\LoginController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// LOGIN
Route::post('login', [LoginController::class, 'index']);

Route::middleware('auth:sanctum')->group(function(){
    // USERS
    Route::get('users', [AccountsManagementController::class, 'index']);
    Route::get('users/{id}', [AccountsManagementController::class, 'specificUser']);

    Route::post('add_user', [AccountsManagementController::class, 'store']);

    Route::put('update_user/{id}', [AccountsManagementController::class, 'update']);

    Route::delete('remove_user/{id}', [AccountsManagementController::class, 'destroy']);

    // DEPARTMENT    
    Route::get('departments', [DepartmentController::class, 'index']);
    Route::get('departments/{id}', [DepartmentController::class, 'specificDepartment']);

    Route::post('add_department', [DepartmentController::class, 'store']);

    Route::put('update_department/{id}', [DepartmentController::class, 'update']);

    Route::delete('remove_department/{id}', [DepartmentController::class, 'destroy']);

    // ROLE    
    Route::get('roles', [RoleController::class, 'index']);
    Route::get('roles/{id}', [RoleController::class, 'specificRole']);

    Route::post('add_role', [RoleController::class, 'store']);

    Route::put('update_role/{id}', [RoleController::class, 'update']);

    Route::delete('remove_role/{id}', [RoleController::class, 'destroy']);

    // MODULE    
    Route::get('modules', [ModuleController::class, 'index']);
    Route::get('modules/{id}', [ModuleController::class, 'specificModule']);

    Route::post('add_module', [ModuleController::class, 'store']);

    Route::put('update_module/{id}', [ModuleController::class, 'update']);

    Route::delete('remove_module/{id}', [ModuleController::class, 'destroy']);

    // PERMISSION    
    Route::get('permissions', [PermissionController::class, 'index']);
    Route::get('permissions/{id}', [PermissionController::class, 'specificPermission']);

    Route::post('add_permission', [PermissionController::class, 'store']);

    Route::put('update_permission/{id}', [PermissionController::class, 'update']);

    Route::delete('remove_permission/{id}', [PermissionController::class, 'destroy']);
});