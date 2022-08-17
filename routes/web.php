<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Panel\PanelController;
use App\Http\Controllers\Ticket\SortController;
use App\Http\Controllers\Ticket\TicketController;


// Public Routes
Route::controller(AuthController::class)->group(function(){
    Route::get('login','login')->name('login');
    Route::post('login','userLogin')->name('login');
    Route::get('logout','logout')->name('logout');

});


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {

    Route::get('/', function () {
        return view('layouts.app');
    });

    Route::get('stats',[PanelController::class,'stats'])->name('stats');
        
    Route::controller(TicketController::class)->group(function(){
        Route::get('all_tickets','getAllTickets')->name('all_tickets');
        Route::get('show_ticket/{id}','showTicket')->name('show_ticket');
        Route::post('edit_ticket/{id?}','editTicket')->name('edit_ticket');
        Route::get('tickets_in_progress','getTicketsInProgress')->name('tickets_in_progress');
        Route::get('tickets_pending','getTicketsPending')->name('tickets_pending');
        Route::get('tickets_closed','getTicketsClosed')->name('tickets_closed');
        Route::get('tickets_resolved','getTicketsResolved')->name('tickets_resolved');
        Route::get('search/{query?}','searchTicket')->name('search');
    });

    Route::controller(SortController::class)->group(function(){
        Route::get('sort_by_severity','sortBySeverity')->name('sort_by_severity');
        Route::get('sort_by_category','sortByCategory')->name('sort_by_category');
        Route::get('sort_by_status','sortByStatus')->name('sort_by_status');
        Route::get('sort_by_ticket_no','sortByTicketNo')->name('sort_by_ticket_no');
        Route::get('sort_by_assignee','sortByAssignee')->name('sort_by_assignee');
    });
    
});
