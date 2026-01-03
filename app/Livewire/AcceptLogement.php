<?php

namespace App\Livewire;

use App\Models\Property;
use App\Models\User;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AcceptLogement extends Component
{
    public $notification_id = "";
    public bool $open=true;
    public ?Property $property = null;
    public ?User $user = null;
    public function mount()
    {
        /**
         * @var Notification $notification
         */
        $notification = DatabaseNotification::query()->findOrFail($this->notification_id);
        $this->user = User::query()->findOrFail( $notification->data['client']['id']);
        $this->property = Property::query()->findOrFail( $notification->data['property']['id']);
    }
    public function handleAccept(){
       $property= Property::query()->findOrFail($this->property->id);
       $property->louer(true);
       $property->clients()->syncWithoutDetaching([
            $this->user->id=>['status'=>1]
       ]);
       $this->open=false;
    }
    public function handleRefuse(){
        $this->open=false;
    }
    public function handleDelete(){
        $notification=DatabaseNotification::query()->findOrFail($this->notification_id);
        $notification->delete();
        $this->open=false;
    }
    public function render()
    {

        return view('livewire.accept-logement');
    }
}
