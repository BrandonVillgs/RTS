<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Lista extends Component
{
    use WithPagination;
    public $search = '';
    public $pagena = 6;

    public function render()
    {
        if ($this->search == '') {
            $alumnos = User::orderBy('name', 'asc')->paginate(6);
        }else{
            $alumnos = User::where('name','LIKE',"%$this->search%")->paginate(6);
        }

        return view('livewire.lista',compact('alumnos'));
    }

    public function clean()
    {
        $this->search = '';
    }
}
