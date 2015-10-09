<?php

namespace Tickets\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    /**
     * This ticket has a certain status
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function status()
    {
        return $this->belongsTo('Tickets\TicketsStatus', 'tickets_status_id');
    }

    /**
     * This ticket has many messages
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function messages()
    {
        return $this->hasMany('Tickets\Message', 'ticket_id');
    }
}
