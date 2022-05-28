<?php

namespace App\Http\Livewire\Admin\Church;

use App\Models\Church;
use Livewire\Component;
use App\Models\Predication;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PredicationManagement extends Component
{
    use WithFileUploads;
    public $church,$predicationSelected;
    public $state=[];
    public function mount(Church $church){
        $this->state=[
            'cover_image_url'=>null
        ];
    }

    public function save(){
        $this->validateData();
        $predication=new Predication();
        if ($this->state['cover_image_url']!=null) {
            $cover=$this->state['cover_image_url'];
            $path_cover=$cover->store('church/covers','public');
            $predication->cover_image_url=$path_cover;
        }else{
            $this->dispatchBrowserEvent('data-error',['message'=>'Please, image cover miss']);
        }
        $audio=$this->state['audio_file_url'];
        $path_audio=$audio->store('church/predications','public');

        $predication->title=$this->state['title'];
        $predication->predicator_name=$this->state['predicator_name'];
        $predication->audio_file_url=$path_audio;
        $predication->church_id=$this->church->id;
        $predication->save();
        $this->dispatchBrowserEvent('data-added',['message'=>'Prédication added successfull !']);
    }

    public function edit(Predication $predication){
        $this->state=[
            'title'=>$predication->title,
            'predicator_name'=>$predication->predicator_name,
            'cover_image_url'=>'',
            'audio_file_url'=>'',
        ];
        $this->predicationSelected=$predication;
    }

    public function update(){
        $preview_cover=$this->predicationSelected->cover_image_url;
        $preview_audio=$this->predicationSelected->audio_file_url;
        $this->predicationSelected->title=$this->state['title'];
        $this->predicationSelected->predicator_name=$this->state['predicator_name'];
        if ($this->state['cover_image_url']) {
            $cover=$this->state['cover_image_url'];
            $path_cover=$cover->store('church/covers','public');
            $this->predicationSelected->cover_image_url=$path_cover;
        }
        if ($this->state['audio_file_url']) {
            $audio=$this->state['audio_file_url'];
            $path_audio=$audio->store('church/predications','public');
            $this->predicationSelected->audio_file_url=$path_audio;  
        }
        $this->predicationSelected->update();
        $preview_cover==null?'':Storage::disk('public')->delete($preview_cover);
        $preview_cover==null?'':Storage::disk('public')->delete($preview_audio);
        $this->dispatchBrowserEvent('data-updated',['message'=>'Church update successfull !']);

    }

    public function validateData(){
        Validator::make(
            $this->state,
            [
                'title'=>'required',
                'predicator_name'=>'required',
                'audio_file_url'=>'required|mimes:mp3,wav,m4a',
            ]
        )->validate();
    }
    public function render()
    {
        $predications=Predication::where('church_id',$this->church->id)->get();
        return view('livewire.admin.church.predication-management',['predications'=>$predications]);
    }
}
