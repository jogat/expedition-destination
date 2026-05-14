<?php
namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;

class Login extends Component
{
    public $email = '', $password = '', $remember = false;

    public function login()
    {
        $this->validate(['email' => 'required|email', 'password' => 'required']);

        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            $this->addError('email', 'Invalid credentials.');
            return;
        }

        return redirect()->intended('/');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
