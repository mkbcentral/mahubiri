<?php

namespace App\Livewire\Application\Member\Form;

use App\Livewire\Forms\MemberForm;
use App\Models\Member;
use App\Utils\AppMessage;
use Exception;
use Livewire\Component;

class FormMemberView extends Component
{
    public MemberForm $form;
    public ?Member $memberToEdit = null;

    public function save()
    {
        $this->validate();
        try {
            $this->form->create();
            $this->dispatch('added', ['message' => AppMessage::DATA_SAVED_SUCCESS]);
            $this->redirect('/member', navigate: true);
        } catch (Exception $ex) {
            $this->dispatch('error', ['message' => $ex->getMessage()]);
        }
    }

    public function update()
    {
        $this->validate();
        try {
            $this->form->update($this->memberToEdit);
            $this->dispatch('updated', ['message' => AppMessage::DATA_SAVED_SUCCESS]);
            $this->redirect('/member', navigate: true);
        } catch (Exception $ex) {
            $this->dispatch('error', ['message' => $ex->getMessage()]);
        }
    }

    public function handlerSubmit()
    {
        if ($this->memberToEdit == null) {
            $this->save();
        } else {
            $this->update();
        }
    }



    public function mount(?Member $member)
    {
        if ($member->name != null) {
            $this->memberToEdit = $member;
            $this->form->fill($member->toArray());
        }
    }

    public function render()
    {
        return view('livewire.application.member.form.form-member-view', []);
    }
}
