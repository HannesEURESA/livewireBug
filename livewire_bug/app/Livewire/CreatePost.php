<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePost extends Component
{
    public $char = 0;
    /** Notiz die pro TicketCompanyOrder hinterlegt werden kann */
    public ?string $notice;

    public function updatedNotice($value)
    {

        $this->char = mb_strlen(strip_tags($value), 'UTF-8');
    }

    /** SUBMIT aktualisiert die hinterlegte Notiz zu einer TCO */
    public function setNotice()
    {
        $this->validate(
            ['note' => ['string', 'max:100']],
            ['note.max' => 'Die hinterlegte Notiz darf maximal 100 Zeichen lang sein.']
        );
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
