<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NavbarNotification extends Component
{
    public int $count = 0;
    public $notifications=[];
    public $selectedNotification=null;
    public bool $open=false;

    protected $listeners = [
        'notificationcreated' => 'refreshData',
    ];
    public function mount() {
        $this->refreshData();
    }
    public function refreshData()
    {
        
        if(!Auth::check()) return;
        /**
         * @var User $user
         */
        $user=Auth::user();
        $this->count=$user->unreadNotifications()->count();
        $this->notifications=$user->notifications()->latest()->take(5)->get();
    }
    public function toggle()
    {
        $this->open=!$this->open;
    }
    public function removeNotification($id){

    }
    public function readNotification($id){
        /**
         * @var User $user
         */
        $user=Auth::user();
        $notification=$user->notifications()->where('id',$id)->firstOrFail();
        if($notification->read_at===null){
            $notification->markAsRead();
            
        }
        $this->selectedNotification=$notification;
        $this->refreshData();
    }
    public function render()
    {
        return view('livewire.navbar-notification');
    }
}
