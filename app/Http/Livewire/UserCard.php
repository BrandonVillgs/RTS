<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserCard extends Component
{

    protected $listeners = ['actualizar' => '$refresh'];
    
    public function render()
    {
        $user = User::find(Auth::user()->id);
        return view('livewire.user-card',compact('user'));
    }
}
