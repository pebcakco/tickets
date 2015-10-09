<?php

namespace Tickets\Models;

use Illuminate\Database\Eloquent\Model;

class TicketStatus extends Model
{
    /**
     * This status has many tickets
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tickets()
    {
        return $this->hasMany('Tickets\Ticket', 'ticket_status_id');
    }
}
