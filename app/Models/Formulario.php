<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Formulario extends Model
{
    use HasFactory;

    protected $fillable = ['temperatura','respirar','dolor_garganta','dolor_muscular','user_id','score'];

    public function user()
    {
       return $this->belongsTo(User::class);
    }
}
