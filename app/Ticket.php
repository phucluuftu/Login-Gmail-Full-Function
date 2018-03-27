<?php

namespace App;

use Carbon\Carbon;
use App\Authenticatable\Admin;
use App\Services\IssueCreator;
use App\Events\TicketCommented;
use App\Notifications\NewComment;
use App\Authenticatable\Assistant;
use App\Events\TicketStatusUpdated;
use Illuminate\Support\Facades\App;
use App\Notifications\TicketCreated;
use App\Notifications\TicketAssigned;
use App\Notifications\TicketEscalated;
use App\Services\TicketLanguageDetector;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket
{
    public static function createAndNotify($requester, $title, $body, $tags)
    {
        $requester = Requester::findOrCreate($requester['name'], $requester['email'] ?? null);
        $ticket    = $requester->tickets()->create([
            'title'        => $title,
            'body'         => $body,
            'public_token' => str_random(24),
        ])->attachTags($tags);

        return $ticket;
    }

}
