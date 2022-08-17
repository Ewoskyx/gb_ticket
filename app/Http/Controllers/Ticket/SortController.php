<?php

namespace App\Http\Controllers\Ticket;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\ITicket;
use Illuminate\Http\Request;

class SortController extends Controller
{   
    protected $tickets;
    public function __construct(ITicket $tickets)
    {
        $this->tickets = $tickets;
    }

    public function sortByTicketNo($params) {
       dd($params);
        $tickets = $this->tickets->all()->where('status', '=', $params)->sortBy('ticket_no');
        return view('tickets.sort_by_ticket_no',['tickets'=> $tickets]);
    }
    public function sortBySeverity() {
        $tickets = $this->tickets->all()->sortBy('severity');
        return view('tickets.sort_by_severity',['tickets'=> $tickets]);
    }
    
    public function sortByCategory() {
        $tickets = $this->tickets->all()->sortBy('category');
        return view('tickets.sort_by_category',['tickets'=> $tickets]);
    }
    
    public function sortByStatus() {
        $tickets = $this->tickets->all()->sortBy('status');
        return view('tickets.sort_by_status',['tickets'=> $tickets]);
    }
   
    public function sortByAssignee() {
        $tickets = $this->tickets->all()->sortBy('assignee');
        return view('tickets.sort_by_assignee',['tickets'=> $tickets]);
    }
}
