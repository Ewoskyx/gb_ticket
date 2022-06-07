<?php 

namespace App\Repositories\Eloquent;

use App\Models\Ticket;
use App\Repositories\Contracts\ITicket;

class TicketRepository extends BaseRepository implements ITicket {
    public function model() {
        return Ticket::class;
    }
}