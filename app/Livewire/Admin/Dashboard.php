<?php

namespace App\Livewire\Admin;

use App\Livewire\Actions\Logout;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public array $stats = [];

    public function mount(): void
    {
        $this->stats = [
            'total_users' => User::count(),
            'total_admins' => User::where('role', 'admin')->count(),
            'total_creators' => User::where('role', 'creator')->count(),
            'new_users_today' => User::whereDate('created_at', today())->count(),
        ];
    }

    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.dashboard')
            ->layout('layouts.admin', ['title' => 'Dashboard']);
    }
}

