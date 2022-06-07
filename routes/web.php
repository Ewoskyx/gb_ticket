<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Ticket\SortController;
use App\Http\Controllers\Ticket\TicketController;


// Public Routes
Route::controller(AuthController::class)->group(function(){
    Route::get('login','login')->name('login');
    Route::post('login','userLogin')->name('login');
    Route::get('logout','logout')->name('logout');

});


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
        
    Route::controller(TicketController::class)->group(function(){
        Route::get('/','getAllTickets')->name('all_tickets');
        Route::get('show_ticket/{id}','showTicket')->name('show_ticket');
        Route::get('tickets_in_progress','getTicketsInProgress')->name('tickets_in_progress');
        Route::get('tickets_pending','getTicketsPending')->name('tickets_pending');
        Route::get('tickets_closed','getTicketsClosed')->name('tickets_closed');
        Route::get('tickets_resolved','getTicketsResolved')->name('tickets_resolved');
    });

    Route::controller(SortController::class)->group(function(){
        Route::get('sort_by_severity','sortBySeverity')->name('sort_by_severity');
        Route::get('sort_by_category','sortByCategory')->name('sort_by_category');
        Route::get('sort_by_status','sortByStatus')->name('sort_by_status');
        Route::get('sort_by_ticket_no','sortByTicketNo')->name('sort_by_ticket_no');
        Route::get('sort_by_assignee','sortByAssignee')->name('sort_by_assignee');
    });
    
});
