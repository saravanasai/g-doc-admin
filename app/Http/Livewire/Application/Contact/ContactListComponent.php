<?php

namespace App\Http\Livewire\Application\Contact;

use App\Models\Application\Contact;
use Livewire\Component;

class ContactListComponent extends Component
{

    protected $appId;
    protected $userId;

    public function mount($appId, $userId)
    {

        $this->appId = $appId;
        $this->userId = $userId;
    }
    public function render()
    {
        return view('livewire.application.contact.contact-list-component', [
            "contacts" => Contact::where([
                'app_id' => $this->appId,
                'user_id' => $this->userId,
            ])->get()
        ]);
    }
}
