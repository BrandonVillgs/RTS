<?php

namespace App\Http\Livewire;

use App\Models\Grupo;
use App\Models\User;
use Livewire\Component;

class Grupos extends Component
{
    public $dia = 0;

    public function render()
    {
        $alumnos = User::all()->where('grupo_id', $this->dia);
        return view('livewire.grupos',compact('alumnos'));
    }

    public function añadirAlumno(User $user, $grupo)
    {
        if ($user->grupo == NULL) {
            $user->update([
                'grupo_id' => $grupo
            ]);
    
            $user->save();   
        }
        else{
            $this->addError('grupo-asignado', 'Su grupo ya ha sido asignado.');
        }
    }
}
