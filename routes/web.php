<?php

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
    return view('welcome');
});

route::get('test',['App\Http\Controllers\TestController','Check'])->name('test');

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('departments')->name('departments/')->group(static function() {
            Route::get('/',                                             'DepartmentController@index')->name('index');
            Route::get('/test',                                         'DepartmentController@check')->name('check');
            Route::get('/create',                                       'DepartmentController@create')->name('create');
            Route::post('/',                                            'DepartmentController@store')->name('store');
            Route::get('/{department}/edit',                            'DepartmentController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'DepartmentController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{department}',                                'DepartmentController@update')->name('update');
            Route::delete('/{department}',                              'DepartmentController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('roles')->name('roles/')->group(static function() {
            Route::get('/',                                             'RolesController@index')->name('index');
            Route::get('/create',                                       'RolesController@create')->name('create');
            Route::post('/',                                            'RolesController@store')->name('store');
            Route::get('/{role}/edit',                                  'RolesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'RolesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{role}',                                      'RolesController@update')->name('update');
            Route::delete('/{role}',                                    'RolesController@destroy')->name('destroy');
        });
    });
});



/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('subjects')->name('subjects/')->group(static function() {
            Route::get('/',                                             'SubjectController@index')->name('index');
            Route::get('/create',                                       'SubjectController@create')->name('create');
            Route::post('/',                                            'SubjectController@store')->name('store');
            Route::get('/{subject}/edit',                               'SubjectController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'SubjectController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{subject}',                                   'SubjectController@update')->name('update');
            Route::delete('/{subject}',                                 'SubjectController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('departments')->name('departments/')->group(static function() {
            Route::get('/',                                             'DepartmentController@index')->name('index');
            Route::get('/create',                                       'DepartmentController@create')->name('create');
            Route::post('/',                                            'DepartmentController@store')->name('store');
            Route::get('/{department}/edit',                            'DepartmentController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'DepartmentController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{department}',                                'DepartmentController@update')->name('update');
            Route::delete('/{department}',                              'DepartmentController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('users')->name('users/')->group(static function() {
            Route::get('/',                                             'UserController@index')->name('index');
            Route::get('/create',                                       'UserController@create')->name('create');
            Route::post('/',                                            'UserController@store')->name('store');
            Route::get('/{user}/edit',                                  'UserController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'UserController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{user}',                                      'UserController@update')->name('update');
            Route::delete('/{user}',                                    'UserController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('users')->name('users/')->group(static function() {
            Route::get('/',                                             'UsersController@index')->name('index');
            Route::get('/create',                                       'UsersController@create')->name('create');
            Route::post('/',                                            'UsersController@store')->name('store');
            Route::get('/{user}/edit',                                  'UsersController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'UsersController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{user}',                                      'UsersController@update')->name('update');
            Route::delete('/{user}',                                    'UsersController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('blogs')->name('blogs/')->group(static function() {
            Route::get('/',                                             'BlogController@index')->name('index');
            Route::get('/create',                                       'BlogController@create')->name('create');
            Route::post('/',                                            'BlogController@store')->name('store');
            Route::get('/{blog}/edit',                                  'BlogController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'BlogController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{blog}',                                      'BlogController@update')->name('update');
            Route::delete('/{blog}',                                    'BlogController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('blog-categories')->name('blog-categories/')->group(static function() {
            Route::get('/',                                             'BlogCategoriesController@index')->name('index');
            Route::get('/create',                                       'BlogCategoriesController@create')->name('create');
            Route::post('/',                                            'BlogCategoriesController@store')->name('store');
            Route::get('/{blogCategory}/edit',                          'BlogCategoriesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'BlogCategoriesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{blogCategory}',                              'BlogCategoriesController@update')->name('update');
            Route::delete('/{blogCategory}',                            'BlogCategoriesController@destroy')->name('destroy');
        });
    });
});