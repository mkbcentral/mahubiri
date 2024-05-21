<div>
    <x-navigation.bread-crumb icon='fa fa-pen'
        label="{{ $memberToEdit == null ? 'CREATION NOUVEAU MEMBER' : 'EDITION MEMBRE' }}" color='text-secondary'>
        <x-navigation.bread-crumb-item label='Creation' />
        <x-navigation.bread-crumb-item label='Liste member' isLinked=true link="member" />
    </x-navigation.bread-crumb>
    <x-content.main-content-page>
        <form wire:submit='handlerSubmit'>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <x-form.label value="{{ __('Nom complet') }}" />
                        <x-form.input type='text' wire:model.blur='form.name' :error="'form.name'" />
                        <x-errors.validation-error value='form.name' />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <x-form.label value="{{ __('Genre') }}" />
                        <x-widget.data.civility-select wire:model.blur='form.civility' :error="'form.civility'" />
                        <x-errors.validation-error value='form.civility' />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <x-form.label value="{{ __('Date de naissance') }}" />
                        <x-form.input type='date' wire:model.blur='form.birthdate' :error="'form.birthdate'" />
                        <x-errors.validation-error value='form.birthdate' />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <x-form.label value="{{ __('N° de contact') }}" />
                        <x-form.input type='text' wire:model.blur='form.phone' :error="'form.phone'" />
                        <x-errors.validation-error value='form.phone' />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <x-form.label value="{{ __('Etat civil') }}" />
                        <x-widget.data.civil-state-select wire:model.blur='form.civil_state_id' :error="'form.civil_state_id'" />
                        <x-errors.validation-error value='form.civil_state_id' />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <x-form.label value="{{ __('Fonction') }}" />
                        <x-widget.data.member-function-select type='text' wire:model.blur='form.member_function_id'
                            :error="'form.member_function_id'" />
                        <x-errors.validation-error value='form.member_function_id' />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <x-form.label value="{{ __('Date adhésoin') }}" />
                        <x-form.input type='date' wire:model.blur='form.subscription_date' :error="'form.subscription_date'" />
                        <x-errors.validation-error value='form.subscription_date' />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <x-form.label value="{{ __('Adresse physique') }}" />
                        <x-form.input type='text' wire:model.blur='form.address' :error="'form.address'" />
                        <x-errors.validation-error value='form.address' />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <x-form.label value="{{ __('Email') }}" />
                        <x-form.input type='text' wire:model.blur='form.email' :error="'form.email'" />
                        <x-errors.validation-error value='form.email' />
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <x-form.button class=" btn-info " type='submit'>
                    <x-widget.loading-circular-md wire:loading wire:target='save' />
                    <span wire:loading.class='d-none'><i class="fa fa-save" aria-hidden="true"></i> Sauvegarder</span>
                </x-form.button>
            </div>
        </form>
    </x-content.main-content-page>
</div>
