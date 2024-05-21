<?php

namespace App\Livewire\Application\Auth;

use App\Livewire\Forms\AuthForm;
use App\Utils\AppMessage;
use Livewire\Component;

class LoginView extends Component
{
    public AuthForm $form;
    /**
     * @return void
     */
    public function login(): void
    {
        $this->validate();
        try {
            if ($this->form->login()) {
                $this->dispatch('updated', ['message' => AppMessage::LOGGED_IN_SUCCESS]);
                $this->redirect('/', navigate: true);;
            } else {
                $this->dispatch('error', ['message' => AppMessage::LOGGED_IN_FAILLED]);
            }
        } catch (\Exception $ex) {
            $this->dispatch('error', ['message' => $ex->getMessage()]);
        }
    }

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.application.auth.login-view');
    }
}
