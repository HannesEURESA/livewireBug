<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class notice extends Component
{
    public $char = 0;

    public function updatedNotice($value)
    {
        $this->char = mb_strlen(strip_tags($value), 'UTF-8');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        dd($this->char);
        return view('components.notice');
    }
}
