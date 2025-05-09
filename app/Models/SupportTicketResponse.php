<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupportTicketResponse extends Model
{
    protected $fillable = [
        'ticket_id',
        'subject',
        'message',
    ];
    public function ticket()
    {
        return $this->belongsTo(SupportTicket::class, 'ticket_id', 'id');
    }
}
