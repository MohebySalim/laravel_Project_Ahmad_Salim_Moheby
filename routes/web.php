<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\ZoneController;
use App\Http\Controllers\ViolenceController;
use App\Http\Controllers\PerpetratorController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\OccupationController;
use App\Http\Controllers\AjscCaseController;
use App\Http\Controllers\CaseSummaryController;
use App\Http\Controllers\AjscController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return redirect()->route('login');
});


//Auth::routes();
Auth::routes(['register' => false]);
//Auth::routes();

Route::get('/ajsc', [AjscController::class, 'ajsc'])->name('ajsc');
Route::get('/case_report_page/{id}', [AjscController::class, 'case_report_page'])->name('case_report_page');
Route::get('/getAjscRecords', [AjscController::class, 'getAjscRecords'])->name('getAjscRecords');
Route::get('/METHOLOGY', [AjscController::class, 'getMethology'])->name('getMethology');
Route::get('/getProvince', [AjscController::class, 'getProvince'])->name('getProvince');

Route::get('/change-locale/{locale}', [AjscController::class, 'changeLocale'])->name('change.locale');

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    // You can redirect to a specific route or URL after changing the locale
    return redirect()->route('ajsc'); // Replace 'ajsc' with the route you want to redirect to.
})->name('localization');



//Route::get('language/{locale}', function($locale) {
//    app()->setLocale($locale);
//    session()->put('locale', $locale);
//    return redirect()->back();
//})->name('localization');

/// notifications Routes
//Route::get('UserAllNotifications', [HomeController::class, 'UserAllNotifications'])->name('UserAllNotifications');
//Route::get('markAsRead/{id}', [HomeController::class, 'markAsRead'])->name('markAsRead');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->group(function () {
    //    Route::get('/home', [HomeController::class, 'index'])->name('home');
    // user Routes
    Route::group(array('prefix' => 'user/'), function () {
        Route::get('userList', [UserController::class, 'userList'])->name('userList');
        Route::get('CreateUser', [UserController::class, 'CreateUser'])->name('CreateUser');
        Route::post('bringRelatedRoles', [UserController::class, 'bringRelatedRoles'])->name('bringRelatedRoles');
        Route::post('StoreUser', [UserController::class, 'StoreUser'])->name('StoreUser');
        Route::get('EditUser/{id}', [UserController::class, 'EditUser'])->name('EditUser');
        Route::put('UpdateUser/{id}', [UserController::class, 'UpdateUser'])->name('UpdateUser');
        Route::put('UpdatePassword/{id}', [UserController::class, 'UpdatePassword'])->name('UpdatePassword');

        // profile route
        Route::get('MyProfile', [HomeController::class, 'MyProfile'])->name('MyProfile');
        Route::put('UpdateMyProfile/{id}', [HomeController::class, 'UpdateMyProfile'])->name('UpdateMyProfile');

        // case routes
        Route::get('getCaseList', [AjscCaseController::class, 'getCaseList'])->name('getCaseList');
        Route::post('storeAjscCase', [AjscCaseController::class, 'storeAjscCase'])->name('storeAjscCase');
        Route::put('updateAjscCase/{id}', [AjscCaseController::class, 'updateAjscCase'])->name('updateAjscCase');
        Route::get('getCaseDetails/{id}', [AjscCaseController::class, 'getCaseDetails'])->name('getCaseDetails');
        Route::delete('getDestroyCase/{id}', [AjscCaseController::class, 'getDestroyCase'])->name('getDestroyCase');
        Route::get('getAjscCaseReports', [AjscCaseController::class, 'getAjscCaseReports'])->name('getAjscCaseReports');
        // case Summary
        Route::get('getCaseSummary', [CaseSummaryController::class, 'getCaseSummary'])->name('getCaseSummary');
        Route::post('addCaseSummary', [CaseSummaryController::class, 'addCaseSummary'])->name('addCaseSummary');
        Route::put('UpdateCaseSummary/{id}', [CaseSummaryController::class, 'UpdateCaseSummary'])->name('UpdateCaseSummary');
        Route::get('summaryExport', [CaseSummaryController::class, 'summaryExport'])->name('summaryExport');

        // for configs
        Route::post('/RelatedProvinces', [ZoneController::class, 'RelatedProvinces'])->name('RelatedProvinces');
        Route::get('/zoneExport', [ZoneController::class, 'zoneExport'])->name('zoneExport');
        Route::resource('zones', ZoneController::class);
        Route::post('/RelatedDistrict', [ProvinceController::class, 'RelatedDistrict'])->name('RelatedDistrict');
        Route::get('/provinceExport', [ProvinceController::class, 'provinceExport'])->name('provinceExport');
        Route::resource('provinces', ProvinceController::class);
        Route::get('/districtExport', [DistrictController::class, 'districtExport'])->name('districtExport');
        Route::resource('districts', DistrictController::class);
        Route::get('/violenceExport', [ViolenceController::class, 'violenceExport'])->name('violenceExport');
        Route::resource('violences', ViolenceController::class);
        Route::get('/perpetratorExport', [PerpetratorController::class, 'perpetratorExport'])->name('perpetratorExport');
        Route::resource('perpetrators', PerpetratorController::class);
        Route::get('/meidaExport', [MediaController::class, 'meidaExport'])->name('meidaExport');
        Route::resource('medias', MediaController::class);
        Route::get('/complaintExport', [ComplaintController::class, 'complaintExport'])->name('complaintExport');
        Route::resource('complaints', ComplaintController::class);
        Route::get('/occupationExport', [OccupationController::class, 'occupationExport'])->name('occupationExport');
        Route::resource('occupations', OccupationController::class);
    });
    Route::group(array('prefix' => 'ajsc/'), function () {
        //        Route::get('ajscPaddingList', [AjscformController::class, 'ajscPaddingList'])->name('ajscPaddingList');

    });

    Route::get('language/{locale}', function ($locale) {
        app()->setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    })->name('localization');
});
