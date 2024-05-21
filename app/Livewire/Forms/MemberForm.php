<?php

namespace App\Livewire\Forms;

use App\Domain\Features\Member\MemberFeature;
use App\Models\Member;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Form;

class MemberForm extends Form
{
    #[Validate('required', message: 'Nom est requis', onUpdate: false)]
    public string $name = '';
    #[Validate('required', message: 'Genre est requis', onUpdate: false)]
    public string $civility = '';
    #[Validate('required', message: 'Date de naissance réquise', onUpdate: false)]
    #[Validate('date', message: 'Format date invalide', onUpdate: false)]
    public string $birthdate = '';
    #[Validate('required', message: 'Etat civil réquis', onUpdate: false)]
    public string $civil_state_id = '';
    #[Validate('required', message: 'N° de contact réquis ', onUpdate: false)]
    public string $phone = '';
    #[Validate('required', message: 'Nom du member obligatoire', onUpdate: false)]
    public string $email = '';
    #[Validate('nullable',)]
    public string $address = '';
    #[Validate('required', message: "Date d'adhésion réquise", onUpdate: false)]
    #[Validate('date', message: 'Format date invalide', onUpdate: false)]
    public string $subscription_date = '';
    #[Validate('required', message: "Finction réquise", onUpdate: false)]
    public string $member_function_id = '';

    private  function input(): array
    {
        return $input = [
            'name' => $this->name,
            'civility' => $this->civility,
            'birthdate' => $this->birthdate,
            'civil_state_id' => $this->civil_state_id,
            'phone' => $this->phone,
            'email' => $this->email,
            'address' => $this->address,
            'church_id' => Auth::user()->church->id,
            'subscription_date' => $this->subscription_date,
            'member_function_id' => $this->member_function_id
        ];
    }
    public function create(): Member
    {
        return MemberFeature::create($this->input());
    }
    public function update(Member $member): bool
    {
        return  MemberFeature::update($member, $this->input());
    }
}
