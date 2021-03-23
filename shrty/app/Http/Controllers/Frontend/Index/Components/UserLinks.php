<?php

namespace App\Http\Controllers\Frontend\Index\Components;

use App\Models\Link;
use Livewire\Component;
use Livewire\WithPagination;

class UserLinks extends Component
{
    use WithPagination;

    protected $links = [];

    protected $listeners = [
        'loadUserLinkList',
    ];

    public function render()
    {
        return view('web.frontend.index.components.user-links', [
            'links' => $this->links,
        ]);
    }

    public function mount()
    {
        $this->loadUserLinkList();
    }

    public function loadUserLinkList()
    {
        $this->links = Link::where('user_id', 1)->orderByDesc('created_at')->paginate(5);
    }
}
