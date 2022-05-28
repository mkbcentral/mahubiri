<?php

namespace App\Http\Livewire\Admin\Church;

use App\Models\Church;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ChurchManagement extends Component
{
    use WithFileUploads;
    public $state=[],$churchSelected;

    public function save(){
        $this->validateData();
        $church=new Church();
        if ($this->state['logo_url']) {
            $logo=$this->state['logo_url'];
            $path=$logo->store('logo','public');
            $church->logo_url=$path;
        }
        $church->name=$this->state['name'];
        $church->abreviation=$this->state['abreviation'];
        $church->pastor_name=$this->state['pastor_name'];
        $church->phone=$this->state['phone'];
        $church->email=$this->state['email'];
        $church->save();
        $this->dispatchBrowserEvent('data-added',['message'=>"Teacher created successfull"]);
    }

    public function edit(Church $church){
        $this->state=$church->toArray();
        $this->churchSelected=$church;
    }

    public function update(){
        $this->validateData();
        $preview=$this->churchSelected->logo_url;
        if ($this->state['logo_url']) {
            $logo=$this->state['logo_url'];
            $path=$logo->store('logo','public');
            $this->churchSelected->logo_url=$path;
        }else{
            $this->churchSelected->name=$this->state['name'];
            $this->churchSelected->abreviation=$this->state['abreviation'];
            $this->churchSelected->phone=$this->state['phone'];
            $this->churchSelected->email=$this->state['email'];
        }
        $this->churchSelected->update();
         Storage::disk('public')->delete($preview);
        $this->cleanupOldUploads();
        $this->dispatchBrowserEvent('data-updated',['message'=>'Church update successfull !']);

    }

    public function validateData(){
        Validator::make(
            $this->state,
            [
                'name'=>'required',
                'abreviation'=>'nullable',
                'pastor_name'=>'required',
                'email'=>'email',
                'phone'=>'min:4',
                'logo_url'=>'image|nullable'
            ]
        )->validate();
    }

   

    public function mount(){
        $this->state=[
            'logo_url'=>null,
            'abreviation'=>'',
            'phone'=>'+243',
        ];
    }
    public function render()
    {
        $churchs=Church::all();
        return view('livewire.admin.church.church-management',['churchs'=>$churchs]);
    }
}
