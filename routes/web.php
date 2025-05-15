<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Models\BrokenReport;
use App\Models\DeliveryForm;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Artisan;

Route::get('/', function () {
    return redirect()->route('login');
});




// Route::post('/super-admin/master/kategori/add', [CategoryController::class, 'store'])->name('categories.store');







Route::view('/login', 'pages.auth.login')->name('login');

Route::name("super-admin.")->prefix("super-admin")->group(function () {
    Route::name("dashboard.")->prefix("dashboard")->group(function () {
        Route::view('/', 'pages.super-admin.dashboard.dashboard')->name("index");
        Route::view('/washing', 'pages.super-admin.dashboard.dashboard-washing')->name("washing");
        Route::view('/washing-2', 'pages.super-admin.dashboard.dashboard-drying-tunnel')->name("washing-2");
        Route::view('/balancing', 'pages.super-admin.dashboard.dashboard-balancing')->name("balancing");
        Route::view('/checking', 'pages.super-admin.dashboard.dashboard-checking')->name("checking");
        Route::view('/delivery', 'pages.super-admin.dashboard.dashboard-delivery')->name("delivery");
        Route::view('/drying', 'pages.super-admin.dashboard.dashboard-drying')->name("drying");
        Route::view('/folding', 'pages.super-admin.dashboard.dashboard-folding')->name("folding");
        Route::view('/ironing', 'pages.super-admin.dashboard.dashboard-ironing')->name("ironing");
        Route::view('/spotting', 'pages.super-admin.dashboard.dashboard-spotting')->name("spotting");
        Route::view('/mesin-rusak', 'pages.super-admin.dashboard.dashboard-mesin-rusak')->name("mesin-rusak");
        Route::view('/spotting-rusak', 'pages.super-admin.dashboard.dashboard-spotting-rusak')->name("spotting-rusak");
        Route::view('/trolley-rusak', 'pages.super-admin.dashboard.dashboard-trolley-rusak')->name("trolley-rusak");
        Route::view('/truck-rusak', 'pages.super-admin.dashboard.dashboard-truck-rusak')->name("truck-rusak");

        Route::view('/balancing-detail-1', 'pages.super-admin.dashboard.detail.balancing.balancing-detail-1')->name("balancing-detail-1");
        Route::view('/balancing-detail-2', 'pages.super-admin.dashboard.detail.balancing.balancing-detail-2')->name("balancing-detail-2");

        Route::view('/checking-detail-1', 'pages.super-admin.dashboard.detail.checking.checking-detail-1')->name("checking-detail-1");
        Route::view('/checking-detail-2', 'pages.super-admin.dashboard.detail.checking.checking-detail-2')->name("checking-detail-2");

        Route::view('/delivery-detail-1', 'pages.super-admin.dashboard.detail.delivery.delivery-detail-1')->name("delivery-detail-1");

        Route::view('/drying-detail-1', 'pages.super-admin.dashboard.detail.drying.drying-detail-1')->name("drying-detail-1");
        Route::view('/drying-detail-2', 'pages.super-admin.dashboard.detail.drying.drying-detail-2')->name("drying-detail-2");

        Route::view('/folding-detail-1', 'pages.super-admin.dashboard.detail.folding.folding-detail-1')->name("folding-detail-1");
        Route::view('/folding-detail-2', 'pages.super-admin.dashboard.detail.folding.folding-detail-2')->name("folding-detail-2");

        Route::view('/ironing-detail-1', 'pages.super-admin.dashboard.detail.ironing.ironing-detail-1')->name("ironing-detail-1");
        Route::view('/ironing-detail-2', 'pages.super-admin.dashboard.detail.ironing.ironing-detail-2')->name("ironing-detail-2");

        Route::view('/spotting-detail-1', 'pages.super-admin.dashboard.detail.spotting.spotting-detail-1')->name("spotting-detail-1");
        Route::view('/spotting-detail-2', 'pages.super-admin.dashboard.detail.spotting.spotting-detail-2')->name("spotting-detail-2");

        Route::view('/washing-detail-1', 'pages.super-admin.dashboard.detail.washing.washing-detail-1')->name("washing-detail-1");
        Route::view('/washing-detail-2', 'pages.super-admin.dashboard.detail.washing.washing-detail-2')->name("washing-detail-2");
    });

    Route::name("setting.")->prefix("setting")->group(function () {
        Route::view('/', 'pages.super-admin.setting.setting')->name("index");
    });

    Route::name("report-kerusakan.")->prefix("report-kerusakan")->group(function () {
        Route::view('/', 'pages.super-admin.report-kerusakan.report-kerusakan')->name("index");
        Route::view('/add', 'pages.super-admin.report-kerusakan.report-kerusakan-add')->name("add");
    });

    Route::name("master.")->prefix("master")->group(function () {
        Route::name("user.")->prefix("user")->group(function () {
            Route::view('/', 'pages.super-admin.master.master-user.master-user')->name("index");
            Route::view('/add', 'pages.super-admin.master.master-user.master-user-add')->name("add");
            Route::view('/ubah', 'pages.super-admin.master.master-user.master-user-ubah')->name("ubah");
            Route::view('/detail', 'pages.super-admin.master.master-user.master-user-detail')->name("detail");
        });

        Route::name("role.")->prefix("role")->group(function () {
            Route::view('/', 'pages.super-admin.master.master-role.master-role')->name("index");
            Route::view('/add', 'pages.super-admin.master.master-role.master-role-add')->name("add");
            Route::view('/ubah', 'pages.super-admin.master.master-role.master-role-ubah')->name("ubah");
        });

        Route::name("truck.")->prefix("truck")->group(function () {
            Route::view('/', 'pages.super-admin.master.master-truck.master-truck')->name("index");
            Route::view('/add', 'pages.super-admin.master.master-truck.master-truck-add')->name("add");
            Route::view('/ubah', 'pages.super-admin.master.master-truck.master-truck-ubah')->name("ubah");
            Route::view('/detail', 'pages.super-admin.master.master-truck.master-truck-detail')->name("detail");
        });

        Route::name("pabrik.")->prefix("pabrik")->group(function () {
            Route::view('/', 'pages.super-admin.master.master-pabrik.master-pabrik')->name("index");
            Route::view('/add', 'pages.super-admin.master.master-pabrik.master-pabrik-add')->name("add");
            Route::view('/ubah', 'pages.super-admin.master.master-pabrik.master-pabrik-ubah')->name("ubah");
        });

        Route::name("kategori.")->prefix("kategori")->group(function () {
            Route::resource('category', CategoryController::class);
            // Route::get('/', [CategoryController::class, 'index'])->name("index");
            // Route::get('/super-admin/master/kategori/ubah/{id}', [CategoryController::class, 'edit'])->name('edit');
            // Route::put('/super-admin/master/kategori/{id}/update', [CategoryController::class, 'update'])->name('update');
            // Route::post('/add', [CategoryController::class, 'store'])->name('store');


            Route::view('/add', 'pages.super-admin.master.master-kategori.master-kategori-add')->name("add");
            Route::view('/ubah', 'pages.super-admin.master.master-kategori.master-kategori-ubah')->name("ubah");
        });

        Route::name("sub-kategori.")->prefix("sub-kategori")->group(function () {
            Route::view('/', 'pages.super-admin.master.master-sub-kategori.master-sub-kategori')->name("index");
            Route::view('/add', 'pages.super-admin.master.master-sub-kategori.master-sub-kategori-add')->name("add");
            Route::view('/ubah', 'pages.super-admin.master.master-sub-kategori.master-sub-kategori-ubah')->name("ubah");
        });

        Route::name("master.")->prefix("master")->group(function () {
            Route::resource('category', CategoryController::class);
        });
    });
});

require __DIR__ . '/backend.php';
