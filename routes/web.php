<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Manage\RoleController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\FrontEnd\HomeController;
use App\Http\Controllers\Manage\ModuleController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Manage\PermissionController;
use App\Http\Controllers\Backend\DhashboardController;
use App\Http\Controllers\Backend\ActivityLogController;


Route::controller(HomeController::class)
    ->group(function () {
        Route::get('/', 'index')->name('home');
        Route::get('/product/show', 'show')->name('product.show');
    });


Route::get('/dashboard', [DhashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::delete('/profile/photo', [ProfileController::class, 'deletePhoto'])->name('profile.photo.delete');
});
Route::middleware(['auth'])
    ->prefix('admin')
    ->group(function () {
        Route::prefix('administration')->group(function () {
            Route::controller(UserController::class)
                ->prefix('/users')
                ->group(function () {
                    Route::get('/', 'index')->name('users.index');
                    Route::get('/create', 'create')->name('users.create');
                    Route::post('/', 'store')->name('users.store');
                    Route::get('/{user}/edit', 'edit')->name('users.edit');
                    Route::put('/{user}/update', 'update')->name('users.update');
                    Route::delete('/{id}/destroy', 'destroy')->name('users.destroy');
                });
            //activity log
            Route::get('/user-activity', [ActivityLogController::class, 'index'])->name('activityLog.index');
        });

        //<--route for Role-->
        Route::controller(RoleController::class)
            ->prefix('/roles')
            ->group(function () {
            Route::get('/', 'index')->name('roles.index');
            Route::get('/create', 'create')->name('roles.create');
            Route::post('/', 'store')->name('roles.store');
            Route::get('/{role}/edit', 'edit')->name('roles.edit');
            Route::put('/{role}/update', 'update')->name('roles.update');
            Route::delete('/{id}/destroy', 'destroy')->name('roles.destroy');
            Route::get('/{role}/permission', 'rolePermissionEdit')->name('roles.permission');
            Route::put('/{role}/permission', 'rolePermissionUpdate')->name('roles.permissionUpdate');
        });

        //<--route for Module-->
        Route::controller(ModuleController::class)
            ->prefix('/modules')
            ->group(function () {
            Route::get('/', 'index')->name('modules.index');
            Route::get('/create', 'create')->name('modules.create');
            Route::post('/', 'store')->name('modules.store');
            Route::get('/{module}/edit', 'edit')->name('modules.edit');
            Route::put('/{module}/update', 'update')->name('modules.update');
            Route::delete('/{id}/destroy', 'destroy')->name('modules.destroy');
        });

        // route for permission
        Route::controller(PermissionController::class)
            ->prefix('/permissions')
            ->group(function () {
            Route::get('/', 'index')->name('permissions.index');
            Route::get('/create', 'create')->name('permissions.create');
            Route::post('/', 'store')->name('permissions.store');
            Route::get('/{permission}/edit', 'edit')->name('permissions.edit');
            Route::put('/{permission}/update', 'update')->name('permissions.update');
            Route::delete('/{id}/destroy', 'destroy')->name('permissions.destroy');
        });
    });
Route::middleware(['auth'])
    ->prefix('admin')
    ->group(function () {

        Route::controller(CategoryController::class)
            ->prefix('/categories')
            ->group(function () {
                Route::get('/', 'index')->name('categories.index');
                Route::get('/create', 'create')->name('categories.create');
                Route::post('/', 'store')->name('categories.store');
                Route::get('/{category}/edit', 'edit')->name('categories.edit');
                Route::put('/{category}/update', 'update')->name('categories.update');
                Route::delete('/{id}/destroy', 'destroy')->name('categories.destroy');
            });
        Route::controller(ProductController::class)
            ->prefix('/products')
            ->group(function () {
                Route::get('/', 'index')->name('products.index');
                Route::get('/create', 'create')->name('products.create');
                Route::post('/', 'store')->name('products.store');
                Route::get('/{product}/edit', 'edit')->name('products.edit');
                Route::put('/{product}/update', 'update')->name('products.update');
                Route::delete('/{id}/destroy', 'destroy')->name('products.destroy');
            });
    });

require __DIR__ . '/auth.php';
