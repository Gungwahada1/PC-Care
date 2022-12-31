<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\DarkModeController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\NewsPageController;
use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginPageController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ColorSchemeController;
use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\RegisterPageController;

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

Route::get('dark-mode-switcher', [DarkModeController::class, 'switch'])->name('dark-mode-switcher');
Route::get('color-scheme-switcher/{color_scheme}', [ColorSchemeController::class, 'switch'])->name('color-scheme-switcher');

Route::get('/', function () {
    return redirect('/home');
})->name('home');

Route::controller(FrontController::class)->group(function () {

    Route::get('/home', 'index')->name('front.index');
    Route::get('products', 'products')->name('front.products');
    Route::get('news', 'news')->name('front.news');
    Route::get('contact', 'contact')->name('front.contact');
    Route::get('about', 'about')->name('front.about');
    Route::get('letsChat', 'letsChat')->name('front.letsChat');
});

Route::controller(AuthController::class)->middleware('loggedin')->group(function () {
    Route::get('login', 'loginView')->name('login.index');
    Route::post('login', 'login')->name('login.check');

    Route::get('register', 'registerView')->name('register.index');
    Route::post('store-register', 'storeRegister')->name('register.store');
});

Route::middleware('auth')->group(function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::get('data-pegawai', [PegawaiController::class, 'data_pegawai'])->name('data.pegawai');
    Route::get('tambah-pegawai', [PegawaiController::class, 'tambah_pegawai'])->name('tambah.pegawai');
    Route::post('store-pegawai', [PegawaiController::class, 'store'])->name('store.pegawai');
    Route::get('edit-pegawai/{id}/edit', [PegawaiController::class, 'edit_pegawai'])->name('edit.pegawai');
    Route::put('update-pegawai/{id}', [PegawaiController::class, 'update_pegawai'])->name('update.pegawai');
    Route::delete('delete-pegawai/{id}', [PegawaiController::class, 'destroy_pegawai'])->name('delete.pegawai');

    Route::get('data-pelanggan', [PelangganController::class, 'data_pelanggan'])->name('data.pelanggan');
    Route::get('edit-pelanggan/{id}/edit', [PelangganController::class, 'edit_pelanggan'])->name('edit.pelanggan');
    Route::put('update-pelanggan/{id}', [PelangganController::class, 'update_pelanggan'])->name('update.pelanggan');
    Route::delete('delete-pelanggan/{id}', [PelangganController::class, 'destroy_pelanggan'])->name('delete.pelanggan');

    Route::get('data-komentar', [KomentarController::class, 'data_komentar'])->name('data.komentar');
    Route::delete('delete-komentar/{id}', [KomentarController::class, 'destroy_komentar'])->name('delete.pelanggan');

    Route::get('data-produk', [ProdukController::class, 'data_produk'])->name('data.produk');
    Route::post('store-produk', [ProdukController::class, 'store'])->name('store.produk');
    Route::get('tambah-produk', [ProdukController::class, 'tambah_produk'])->name('tambah.produk');
    Route::get('edit-produk/{id}/edit', [ProdukController::class, 'edit_produk'])->name('edit.produk');
    Route::put('update-produk/{id}', [ProdukController::class, 'update_produk'])->name('update.produk');
    Route::delete('delete-produk/{id}', [ProdukController::class, 'destroy_produk'])->name('delete.produk');

    Route::get('kategori-produk', [ProdukController::class, 'kategori_produk'])->name('kategori.produk');
    Route::get('tambah-kategori-produk', [ProdukController::class, 'tambah_kategori_produk'])->name('tambah.kategori.produk');
    Route::post('store-kategori-produk', [ProdukController::class, 'store_kategori_produk'])->name('store.kategori.produk');
    Route::get('edit-kategori-produk/{id}/edit', [ProdukController::class, 'edit_kategori_produk'])->name('edit.kategori.produk');
    Route::put('update-kategori-produk/{id}', [ProdukController::class, 'update_kategori_produk'])->name('update.kategori.produk');
    Route::delete('delete-kategori-produk/{id}', [ProdukController::class, 'destroy_kategori_produk'])->name('delete.kategori.produk');

    Route::get('list-news', [NewsController::class, 'list_news'])->name('list.news');
    Route::get('tambah-berita', [NewsController::class, 'tambah_berita'])->name('tambah.berita');
    Route::post('store-berita', [NewsController::class, 'store'])->name('store.berita');
    Route::get('edit-berita/{id}/edit', [NewsController::class, 'edit_berita'])->name('edit.berita');
    Route::put('update-berita/{id}', [NewsController::class, 'update_berita'])->name('update.berita');
    Route::delete('delete-berita/{id}', [NewsController::class, 'destroy_berita'])->name('delete.berita');

    Route::get('landing-page', [LandingPageController::class, 'landing_page'])->name('landing.page');
    Route::put('update-landing-page/{id}', [LandingPageController::class, 'update_landing_page'])->name('update.landing.page');

    Route::get('about-page', [AboutPageController::class, 'about_page'])->name('about.page');
    Route::put('update-about-page/{id}', [AboutPageController::class, 'update_about_page'])->name('update.about.page');

    Route::get('news-page', [NewsPageController::class, 'news_page'])->name('news.page');
    Route::put('update-news-page/{id}', [NewsPageController::class, 'update_news_page'])->name('update.news.page');

    Route::get('contact-page', [ContactPageController::class, 'contact_page'])->name('contact.page');
    Route::put('update-contact-page/{id}', [ContactPageController::class, 'update_contact_page'])->name('update.contact.page');

    Route::get('login-page', [LoginPageController::class, 'login_page'])->name('login.page');
    Route::put('update-login-page/{id}', [LoginPageController::class, 'update_login_page'])->name('update.login.page');

    Route::get('register-page', [RegisterPageController::class, 'register_page'])->name('register.page');
    Route::put('update-register-page/{id}', [RegisterPageController::class, 'update_register_page'])->name('update.register.page');

    // Route::controller(PageController::class)->group(function () {
    // Route::get('/', 'dashboardOverview1')->name('dashboard-overview-1');
    // Route::get('dashboard-overview-2-page', 'dashboardOverview2')->name('dashboard-overview-2');
    // Route::get('dashboard-overview-3-page', 'dashboardOverview3')->name('dashboard-overview-3');
    // Route::get('dashboard-overview-4-page', 'dashboardOverview4')->name('dashboard-overview-4');
    // Route::get('dashboard', 'dashboard')->name('dashboard');
    // Route::get('categories-page', 'categories')->name('categories');
    // Route::get('add-product-page', 'addProduct')->name('add-product');
    // Route::get('product-list-page', 'productList')->name('product-list');
    // Route::get('product-grid-page', 'productGrid')->name('product-grid');
    // Route::get('transaction-list-page', 'transactionList')->name('transaction-list');
    // Route::get('transaction-detail-page', 'transactionDetail')->name('transaction-detail');
    // Route::get('seller-list-page', 'sellerList')->name('seller-list');
    // Route::get('seller-detail-page', 'sellerDetail')->name('seller-detail');
    // Route::get('reviews-page', 'reviews')->name('reviews');
    // Route::get('inbox-page', 'inbox')->name('inbox');
    // Route::get('file-manager-page', 'fileManager')->name('file-manager');
    // Route::get('point-of-sale-page', 'pointOfSale')->name('point-of-sale');
    // Route::get('chat-page', 'chat')->name('chat');
    // Route::get('post-page', 'post')->name('post');
    // Route::get('calendar-page', 'calendar')->name('calendar');
    // Route::get('crud-data-list-page', 'crudDataList')->name('crud-data-list');
    // Route::get('crud-form-page', 'crudForm')->name('crud-form');
    // Route::get('users-layout-1-page', 'usersLayout1')->name('users-layout-1');
    // Route::get('users-layout-2-page', 'usersLayout2')->name('users-layout-2');
    // Route::get('users-layout-3-page', 'usersLayout3')->name('users-layout-3');
    // Route::get('profile-overview-1-page', 'profileOverview1')->name('profile-overview-1');
    // Route::get('profile-overview-2-page', 'profileOverview2')->name('profile-overview-2');
    // Route::get('profile-overview-3-page', 'profileOverview3')->name('profile-overview-3');
    // Route::get('wizard-layout-1-page', 'wizardLayout1')->name('wizard-layout-1');
    // Route::get('wizard-layout-2-page', 'wizardLayout2')->name('wizard-layout-2');
    // Route::get('wizard-layout-3-page', 'wizardLayout3')->name('wizard-layout-3');
    // Route::get('blog-layout-1-page', 'blogLayout1')->name('blog-layout-1');
    // Route::get('blog-layout-2-page', 'blogLayout2')->name('blog-layout-2');
    // Route::get('blog-layout-3-page', 'blogLayout3')->name('blog-layout-3');
    // Route::get('pricing-layout-1-page', 'pricingLayout1')->name('pricing-layout-1');
    // Route::get('pricing-layout-2-page', 'pricingLayout2')->name('pricing-layout-2');
    // Route::get('invoice-layout-1-page', 'invoiceLayout1')->name('invoice-layout-1');
    // Route::get('invoice-layout-2-page', 'invoiceLayout2')->name('invoice-layout-2');
    // Route::get('faq-layout-1-page', 'faqLayout1')->name('faq-layout-1');
    // Route::get('faq-layout-2-page', 'faqLayout2')->name('faq-layout-2');
    // Route::get('faq-layout-3-page', 'faqLayout3')->name('faq-layout-3');
    // Route::get('login-page', 'login')->name('login');
    // Route::get('register-page', 'register')->name('register');
    // Route::get('error-page-page', 'errorPage')->name('error-page');
    // Route::get('update-profile-page', 'updateProfile')->name('update-profile');
    // Route::get('change-password-page', 'changePassword')->name('change-password');
    // Route::get('regular-table-page', 'regularTable')->name('regular-table');
    // Route::get('tabulator-page', 'tabulator')->name('tabulator');
    // Route::get('modal-page', 'modal')->name('modal');
    // Route::get('slide-over-page', 'slideOver')->name('slide-over');
    // Route::get('notification-page', 'notification')->name('notification');
    // Route::get('tab-page', 'tab')->name('tab');
    // Route::get('accordion-page', 'accordion')->name('accordion');
    // Route::get('button-page', 'button')->name('button');
    // Route::get('alert-page', 'alert')->name('alert');
    // Route::get('progress-bar-page', 'progressBar')->name('progress-bar');
    // Route::get('tooltip-page', 'tooltip')->name('tooltip');
    // Route::get('dropdown-page', 'dropdown')->name('dropdown');
    // Route::get('typography-page', 'typography')->name('typography');
    // Route::get('icon-page', 'icon')->name('icon');
    // Route::get('loading-icon-page', 'loadingIcon')->name('loading-icon');
    // Route::get('regular-form-page', 'regularForm')->name('regular-form');
    // Route::get('datepicker-page', 'datepicker')->name('datepicker');
    // Route::get('tom-select-page', 'tomSelect')->name('tom-select');
    // Route::get('file-upload-page', 'fileUpload')->name('file-upload');
    // Route::get('wysiwyg-editor-classic', 'wysiwygEditorClassic')->name('wysiwyg-editor-classic');
    // Route::get('wysiwyg-editor-inline', 'wysiwygEditorInline')->name('wysiwyg-editor-inline');
    // Route::get('wysiwyg-editor-balloon', 'wysiwygEditorBalloon')->name('wysiwyg-editor-balloon');
    // Route::get('wysiwyg-editor-balloon-block', 'wysiwygEditorBalloonBlock')->name('wysiwyg-editor-balloon-block');
    // Route::get('wysiwyg-editor-document', 'wysiwygEditorDocument')->name('wysiwyg-editor-document');
    // Route::get('validation-page', 'validation')->name('validation');
    // Route::get('chart-page', 'chart')->name('chart');
    // Route::get('slider-page', 'slider')->name('slider');
    // Route::get('image-zoom-page', 'imageZoom')->name('image-zoom');
    // });
});