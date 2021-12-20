<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeComponent extends Component
{
    public function render()
    {
        $user = User::find(Auth::user()->id);
        return view('livewire.home-component',['user'=>$user])->layout('layouts.base');
    }
}
