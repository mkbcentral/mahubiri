<div class="login-box">
    <div class="card">
        <div class="card-header text-center">
            <img class="" src="{{ asset('logo.svg') }}" alt="Logo" width="80px">
        </div>
        <div class="card-body">
            <h4 class="text-app text-uppercase text-center text-bold align-items-center">
                <x-icons.icon-user /> se connecter
            </h4>
            <form wire:submit='login'>
                <div>
                    <x-form.label value="{{ __('Adresse email') }}" />
                    <x-form.input type='text' wire:model='form.email' :error="'form.email'" style="height: 40px" />
                    <x-errors.validation-error value='form.email' />
                </div>
                <div class="mt-2">
                    <x-form.label value="{{ __('Mot de passe') }}" />
                    <x-form.input type='password' wire:model='form.password' :error="'form.password'" style="height: 40px" />
                    <x-errors.validation-error value='form.password' />
                </div>
                <div class="mt-4">
                    <x-form.button class="bg-app w-100" type='submit'>
                        <x-widget.loading-circular-md wire:loading wire:target='login' />
                        <span wire:loading.class='d-none'>Se connecter</span>
                    </x-form.button>
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
