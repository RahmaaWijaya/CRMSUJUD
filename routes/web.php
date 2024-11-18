<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CampaignController;

use App\Http\Controllers\LeadsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CallsController;
use App\Http\Controllers\DealsController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\CustemerController;
use App\Http\Controllers\ResellerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', 'login');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    // Route for the getting the data feed
    Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/analytics', [DashboardController::class, 'analytics'])->name('analytics');
    Route::get('/dashboard/fintech', [DashboardController::class, 'fintech'])->name('fintech');

    //import dashboard tanpa controller
    // Route::get('/dashboard', function (){
    //     return view('pages/dashboard/dashboard');
    // })->name('dashboard');

    //tambahan punya kita bagian leadsLe
    // Route::get('/leads', function () {
    //     return view('pages/leads/leads');
    // })->name('leads');
    Route::get('/leads', [LeadsController::class, 'index'])->name('leads');
    Route::get('/leads/create', [LeadsController::class, 'create'])->name('create-lead');
    Route::post('/leads/store', [LeadsController::class, 'store'])->name('leads.store');
    Route::get('/leads/import', [LeadsController::class, 'import'])->name('import-leads');
    Route::post('/leads/import1', [LeadsController::class, 'import1'])->name('import.leads');
    Route::get('/leads/{id}', [LeadsController::class, 'show'])->name('lead-detail');
    // Route::get('/leads/editdata', [LeadsController::class, 'edit1'])->name('edit-data-leads');
    Route::get('/leads/{id}/editdata', [LeadsController::class, 'edit'])->name('edit.leads');
    Route::put('/leads/{id}/updatedata', [LeadsController::class, 'update'])->name('update.leads');
    Route::delete('/leads/{id}/delete', [LeadsController::class, 'destroy'])->name('delete.leads');
    Route::post('/leads/copy-to-contact/{id}', [LeadsController::class, 'copyToContact'])->name('copy.to.contact');

    Route::get('/buyer', [BuyerController::class, 'index'])->name('buyer');
    Route::get('/custemer', [CustemerController::class, 'index'])->name('custemer');
    Route::get('/reseller', [ResellerController::class, 'index'])->name('reseller');

    //route bagian contact
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::get('/contact/edit', [ContactController::class, 'edit1'])->name('edit-contact');
    Route::get('/contact/{id}/editdata', [ContactController::class, 'edit2'])->name('edit-data-contact');
    Route::put('/contact/{id}/updatedata', [ContactController::class, 'update'])->name('update-contact');
    Route::get('/contact/{id}', [ContactController::class, 'show'])->name('detail.contact');
    Route::delete('/contact/{id}/delete', [ContactController::class, 'destroy'])->name('delete-contact');
    Route::post('/contact/save', [ContactController::class, 'save'])->name('contact.save');

    //route bagian deals
    Route::get('/deals', [DealsController::class, 'index'])->name('deal');
    Route::get('/deals/{id}/edit', [DealsController::class, 'edit'])->name('edit-deals');
    Route::put('/deals/{id}/updatedeal', [DealsController::class, 'update'])->name('update-deals');
    Route::get('/deals/create', [DealsController::class, 'create'])->name('create-deals');
    Route::post('/deals/store', [DealsController::class, 'store'])->name('store-deals');
    Route::get('/deals/import', [DealsController::class, 'import'])->name('import-deals');
    Route::post('/deals/import1', [DealsController::class, 'import1'])->name('import.deals');
    Route::delete('/deals/{id}/delete', [DealsController::class, 'destroy'])->name('delete-deals');



    //route vagian  call
    Route::get('/call', [CallsController::class, 'index'])->name('call');
    Route::get('/call/{id}/editdata', [CallsController::class, 'edit'])->name('edit-call');
    Route::put('/call/{id}/updatedata', [CallsController::class, 'update'])->name('update-call');
    Route::get('/call/{id}', [CallsController::class, 'show'])->name('detail-call');
    Route::delete('/call/{id}/delete', [CallsController::class, 'destroy'])->name('delete-call');

    Route::get('/ecommerce/customers', [CustomerController::class, 'index'])->name('customers');
    Route::get('/ecommerce/orders', [OrderController::class, 'index'])->name('orders');
    Route::get('/ecommerce/invoices', [InvoiceController::class, 'index'])->name('invoices');
    Route::get('/ecommerce/shop', function () {
        return view('pages/ecommerce/shop');
    })->name('shop');    
    Route::get('/ecommerce/shop-2', function () {
        return view('pages/ecommerce/shop-2');
    })->name('shop-2');     
    Route::get('/ecommerce/product', function () {
        return view('pages/ecommerce/product');
    })->name('product');
    Route::get('/ecommerce/cart', function () {
        return view('pages/ecommerce/cart');
    })->name('cart');    
    Route::get('/ecommerce/cart-2', function () {
        return view('pages/ecommerce/cart-2');
    })->name('cart-2');    
    Route::get('/ecommerce/cart-3', function () {
        return view('pages/ecommerce/cart-3');
    })->name('cart-3');    
    Route::get('/ecommerce/pay', function () {
        return view('pages/ecommerce/pay');
    })->name('pay');     



    Route::get('/campaigns', [CampaignController::class, 'index'])->name('campaigns');
    Route::get('/community/users-tabs', [MemberController::class, 'indexTabs'])->name('users-tabs');
    Route::get('/community/users-tiles', [MemberController::class, 'indexTiles'])->name('users-tiles');
    Route::get('/community/profile', function () {
        return view('pages/community/profile');
    })->name('profile');
    Route::get('/community/feed', function () {
        return view('pages/community/feed');
    })->name('feed');     
    Route::get('/community/forum', function () {
        return view('pages/community/forum');
    })->name('forum');
    Route::get('/community/forum-post', function () {
        return view('pages/community/forum-post');
    })->name('forum-post');    
    Route::get('/community/meetups', function () {
        return view('pages/community/meetups');
    })->name('meetups');    
    Route::get('/community/meetups-post', function () {
        return view('pages/community/meetups-post');
    })->name('meetups-post');    
    Route::get('/finance/cards', function () {
        return view('pages/finance/credit-cards');
    })->name('credit-cards');
    Route::get('/finance/transactions', [TransactionController::class, 'index01'])->name('transactions');
    Route::get('/finance/transaction-details', [TransactionController::class, 'index02'])->name('transaction-details');
    Route::get('/job/job-listing', [JobController::class, 'index'])->name('job-listing');
    Route::get('/job/job-post', function () {
        return view('pages/job/job-post');
    })->name('job-post');    
    Route::get('/job/company-profile', function () {
        return view('pages/job/company-profile');
    })->name('company-profile');
    Route::get('/messages', function () {
        return view('pages/messages'); 
    })->name('messages');
    Route::get('/tasks/kanban', function () {
        return view('pages/tasks/tasks-kanban');
    })->name('tasks-kanban');
    Route::get('/tasks/list', function () {
        return view('pages/tasks/tasks-list');
    })->name('tasks-list');       
    Route::get('/inbox', function () {
        return view('pages/inbox');
    })->name('inbox'); 
    Route::get('/calendar', function () {
        return view('pages/calendar');
    })->name('calendar'); 
    Route::get('/settings/account', function () {
        return view('pages/settings/account');
    })->name('account');  
    Route::get('/settings/notifications', function () {
        return view('pages/settings/notifications');
    })->name('notifications');  
    Route::get('/settings/apps', function () {
        return view('pages/settings/apps');
    })->name('apps');
    Route::get('/settings/plans', function () {
        return view('pages/settings/plans');
    })->name('plans');      
    Route::get('/settings/billing', function () {
        return view('pages/settings/billing');
    })->name('billing');  
    Route::get('/settings/feedback', function () {
        return view('pages/settings/feedback');
    })->name('feedback');
    Route::get('/utility/changelog', function () {
        return view('pages/utility/changelog');
    })->name('changelog');  
    Route::get('/utility/roadmap', function () {
        return view('pages/utility/roadmap');
    })->name('roadmap');  
    Route::get('/utility/faqs', function () {
        return view('pages/utility/faqs');
    })->name('faqs');  
    Route::get('/utility/empty-state', function () {
        return view('pages/utility/empty-state');
    })->name('empty-state');  
    Route::get('/utility/404', function () {
        return view('pages/utility/404');
    })->name('404');
    Route::get('/utility/knowledge-base', function () {
        return view('pages/utility/knowledge-base');
    })->name('knowledge-base');
    Route::get('/onboarding-01', function () {
        return view('pages/onboarding-01');
    })->name('onboarding-01');   
    Route::get('/onboarding-02', function () {
        return view('pages/onboarding-02');
    })->name('onboarding-02');   
    Route::get('/onboarding-03', function () {
        return view('pages/onboarding-03');
    })->name('onboarding-03');   
    Route::get('/onboarding-04', function () {
        return view('pages/onboarding-04');
    })->name('onboarding-04');
    Route::get('/component/button', function () {
        return view('pages/component/button-page');
    })->name('button-page');
    Route::get('/component/form', function () {
        return view('pages/component/form-page');
    })->name('form-page');
    Route::get('/component/dropdown', function () {
        return view('pages/component/dropdown-page');
    })->name('dropdown-page');
    Route::get('/component/alert', function () {
        return view('pages/component/alert-page');
    })->name('alert-page');
    Route::get('/component/modal', function () {
        return view('pages/component/modal-page');
    })->name('modal-page'); 
    Route::get('/component/pagination', function () {
        return view('pages/component/pagination-page');
    })->name('pagination-page');
    Route::get('/component/tabs', function () {
        return view('pages/component/tabs-page');
    })->name('tabs-page');
    Route::get('/component/breadcrumb', function () {
        return view('pages/component/breadcrumb-page');
    })->name('breadcrumb-page');
    Route::get('/component/badge', function () {
        return view('pages/component/badge-page');
    })->name('badge-page'); 
    Route::get('/component/avatar', function () {
        return view('pages/component/avatar-page');
    })->name('avatar-page');
    Route::get('/component/tooltip', function () {
        return view('pages/component/tooltip-page');
    })->name('tooltip-page');
    Route::get('/component/accordion', function () {
        return view('pages/component/accordion-page');
    })->name('accordion-page');
    Route::get('/component/icons', function () {
        return view('pages/component/icons-page');
    })->name('icons-page');
    Route::fallback(function() {
        return view('pages/utility/404');
    });    
});
