<?php

namespace App\Http\Controllers\Ticket;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\ITicket;

class TicketController extends Controller
{
    protected $tickets;

    public function __construct(ITicket $tickets)
    {
        $this->tickets = $tickets;
    }

    public function getAllTickets(){
        $tickets = $this->tickets->all();
        return view('tickets.all_tickets', ['tickets'=>$tickets]);
    }

    public function getTicketsInProgress() {
        $tickets = $this->tickets->all()->where('status','=','in_progress');
        return view('tickets.tickets_in_progress', ['tickets'=>$tickets]);
    }
   
    public function getTicketsPending() {
        $tickets = $this->tickets->all()->where('status','=','pending');
        return view('tickets.tickets_pending', ['tickets'=>$tickets]);
    }
    
    public function getTicketsClosed() {
        $tickets = $this->tickets->all()->where('status','=','closed');
        return view('tickets.tickets_closed', ['tickets'=>$tickets]);
    }
 
    public function getTicketsResolved() {
        $tickets = $this->tickets->all()->where('status','=','resolved');
        return view('tickets.tickets_resolved', ['tickets'=>$tickets]);
    }

    public function showTicket($id) {
        $ticket = $this->tickets->find($id);
        return view('tickets.show_ticket', ['ticket'=>$ticket]);
    }
}
