<?php
  
namespace App\Events;
  
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
  
class MechanicMessage implements ShouldBroadcastNow
{
    use InteractsWithSockets, SerializesModels;
  
    public $data = ['asas'];
  
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($id,$text)
    {
        $this->text=$text;
        $this->id=$id;

        // dd($this);

    }
  
    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {   
        return new PrivateChannel('mechanic.'.$this->id);
    }
  
    /**
     * The event's broadcast name.
     *
     * @return string
     */
    public function broadcastAs()
    {
        return ['MechanicEvent'];
    }
    /**
     * The event's broadcast name.
     *
     * @return string
     */
    public function broadcastWith()
    {   
        $text=($this->text);
        return ['title'=>$text];
    }
}