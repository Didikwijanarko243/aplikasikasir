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
    return view('pages.staff.data_staff');
});

Route::get('/staff', function () {
    return view('pages.staff.data_staff');
})->name('staff');


//form tambah data karyawan
Route::get('/tambah_staff', function () {
    return view('komponen.staff.forms.form_tambah_data');
});

//form import data karyawan
Route::get('/import_staff', function () {
    return view('komponen.staff.forms.form_import');
});


Route::get('/shift', function () {
    return view('pages.staff.pengaturan_shift');
})->name('pengaturan_shift');


//form setting shift
Route::get('/form_shift', function () {
    return view('komponen.staff.forms.shift_form');
});

Route::get('/delete_all_shift', function () {
    return view('komponen.pesan_konfirmasi');
});


Route::get('/akses', function () {
    return view('pages.staff.pengaturan_akses');
})->name('pengaturan_akses');


//produk
Route::get('/produk', function () {
    return view('pages.master.master_produk');
})->name('produk');

Route::get('/kategori_produk', function () {
    return view('pages.master.kategori_produk');
})->name('kategori_produk');

Route::get('/kategori_variasi', function () {
    return view('pages.master.kategori_variasi');
})->name('kategori_variasi');

Route::get('/variasi', function () {
    return view('pages.master.variasi_produk');
})->name('variasi');

Route::get('/satuan', function () {
    return view('pages.master.satuan');
})->name('satuan');

Route::get('/harga_jual', function () {
    return view('pages.master.penentuan_jual_produk');
})->name('penentuan_jual');

Route::get('/form_kategori', function () {
    return view('komponen.master.forms.form_tambah_kategori');
}); 

Route::get('/form_satuan', function () {
    return view('komponen.master.forms.form_satuan');
}); 

Route::get('/form_kategori_variasi', function () {
    return view('komponen.master.forms.form_tambah_kategori_variasi');
}); 

Route::get('/form_variasi', function () {
    return view('komponen.master.forms.form_tambah_variasi');
}); 

Route::get('/form_produk', function () {
    return view('komponen.master.forms.form_tambah_data');
});

Route::get('/import_produk', function () {
    return view('komponen.master.forms.form_import');
});


//transaksi kasir


Route::get('/kasir', function () {
    return view('pages.transaksi.kasir');
})->name('kasir');

Route::get('/mutasi-produk', function () {
    return view('pages.transaksi.listmutasi');
})->name('mutasi');

Route::get('/mutasi-baru', function () {
    return view('pages.transaksi.mutasibaru');
})->name('mutasi-baru');

Route::get('/proses-bulanan', function () {
    return view('pages.transaksi.prosesbulanan');
})->name('proses-bulanan');

Route::get('/setting', function () {
    return view('pages.akun.setting');
})->name('setting');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
