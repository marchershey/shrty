<?php

namespace App\Http\Controllers\Frontend\Index;

use App\Models\Link;
use Livewire\Component;

class IndexController extends Component
{
    public $url;
    public $links;

    protected $rules = [
        'url' => ['required', 'regex:/(?:https?:\/\/)?(?:[a-zA-Z0-9.-]+?\.(?:[a-zA-Z])|\d+\.\d+\.\d+\.\d+)/'],
    ];

    protected $messages = [
        'url.required' => 'How can we shorten a link, when',
    ];

    public function render()
    {
        return view('web.frontend.index.index');
    }

    public function mount()
    {
        $this->url = "google.com";
    }

    public function clearErrors()
    {
        $this->resetValidation();
    }

    public function createLink()
    {
        $this->validate();

        (new Link)->createLink($this->url);

        $this->emit('loadUserLinkList');

    }
}
