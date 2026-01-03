<?php

namespace App\Livewire;

use App\Events\PropertyContactEvent;
use App\Mail\PropertyContactMail;
use App\Models\Property;
use App\Models\User;
use App\Notifications\BienContactNotification;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Locked;
use Livewire\Component;

class PropertyContactTable extends Component
{
    #[Locked]
    public ?Property $property = null;
    public bool $sending = false;
    public string $name = "";
    public string $telephone = "";
    public string $message = "";
    public function isSending()
    {
        $this->sending = !$this->sending;
        $this->reset('name', 'telephone', 'message');
    }
    public function toast($type,$message){
        $this->dispatch('toast',compact('type','message'));
    }
    public function rules(): array
    {
        return [
            'name' => ['required', 'min:2', 'string'],
            'telephone' => ['required', 'min:9', 'numeric',],
            'message' => ['required']
        ];
    }
    public function sendMessage()
    {

        $data = $this->validate();
        event(new PropertyContactEvent($this->property,$data));
        $this->isSending();
        $this->toast('success','demande soumise avec succès');
        
        /**
         * @var User $user
         */
        $user=$this->property->user;
        $user->notify(new BienContactNotification($this->property,$data));
        $this->dispatch('notificationcreated');
        $this->reset('name', 'telephone', 'message');
    }

    public function render()
    {
        return view('livewire.property-contact-table');
    }
}
