<?php

namespace App\Livewire\User;

use App\Models\Kreasi;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $user = auth()->user();
        $totalKreasi = Kreasi::where('user_id', $user->id)->count();

        return view('livewire.user.dashboard', [
            'totalKreasi' => $totalKreasi,
        ])->layout('layouts.user', ['title' => 'Dashboard']);
    }
}

