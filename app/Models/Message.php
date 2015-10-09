<?php

namespace Tickets\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    /**
     * This message belongs to a ticket
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ticket()
    {
        return $this->belongsTo('Tickets\Ticket', 'ticket_id');
    }

    /**
     * This message was made by a user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('Tickets\User', 'user_id');
    }
}
