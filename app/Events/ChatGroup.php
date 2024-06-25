<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\GroupChat;
use App\Models\User;

class ChatGroup implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $groupChat;
    public $userSend;
    public $message;
    public function __construct(GroupChat $groupChat, User $userSend, $message )
    {
        $this->groupChat = $groupChat;
        $this->userSend = $userSend;
        $this->message = $message;
    }

    
    public function broadcastOn()
    {
        return new PrivateChannel('chat.group.' . $this->groupChat->id);
        
    }
}