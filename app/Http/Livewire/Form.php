<?php

namespace App\Http\Livewire;

use App\Models\Formulario;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\User;

class Form extends Component
{
    public $temperatura;
    public $respirar;
    public $dolor_muscular;
    public $dolor_garganta;
    public $score = 0;

    protected $rules = [
        'temperatura' => 'required',
        'respirar' => 'required',
        'dolor_muscular' => 'required',
        'dolor_garganta' => 'required',
    ];

    public function render()
    {
        $alumno = User::findOrFail(Auth::user()->id);
        return view('livewire.form',compact('alumno'));
    }

    public function setScore()
    {
        $this->score = $this->temperatura == 'si' ? $this->score + 1 : $this->score;
        $this->score = $this->respirar == 'si' ? $this->score + 1 : $this->score;
        $this->score = $this->dolor_muscular == 'si' ? $this->score + 1 : $this->score;
        $this->score = $this->dolor_garganta == 'si' ? $this->score + 1 : $this->score;
        return $this->score;
    }

    public function store()
    {   
        $this->validate();
        $this->emit('actualizar');
        Formulario::create([
            'temperatura' => $this->temperatura,
            'respirar' => $this->respirar,
            'dolor_muscular' => $this->dolor_muscular,
            'dolor_garganta' => $this->dolor_garganta,
            'score' => $this->setScore(),
            'user_id' => Auth::user()->id,
        ]);
    }
}
