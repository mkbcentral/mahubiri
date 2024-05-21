<dibv class="card" wire:poll.15s>
    <div class="card-body">
        <h4 class="text-uppercase text-secondary">
            <i class="fa fa-users" aria-hidden="true"></i>Effectif membres
        </h4>
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-4">
                        <x-widget.data.card-dashboard bg='bg-info' textLabel="{{ $total_member }} TOTAL"
                            link='member'>
                            <x-widget.loading-circular-md wire:loading :color="'text-white'" />
                        </x-widget.data.card-dashboard>
                    </div>
                    <div class="col-md-4">
                        <x-widget.data.card-dashboard bg='bg-indigo' textLabel="{{ $total_major_member }} ADULTES"
                            link='member'>
                            <x-widget.loading-circular-md wire:loading :color="'text-white'" />
                        </x-widget.data.card-dashboard>

                    </div>
                    <div class="col-md-4">
                        <x-widget.data.card-dashboard bg='bg-navy' textLabel="{{ $total_minor_member }} ENFANTS"
                            link='member'>
                            <x-widget.loading-circular-md wire:loading :color="'text-white'" />
                        </x-widget.data.card-dashboard>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <x-widget.loading-circular-md wire:loading :color="'text-white'" />
                </div>
                <div wire:loading.class='d-none'>
                    <h2 class="text-indigo">
                        <i class="fa fa-male" aria-hidden="true"></i>
                        Homes ({{ $total_male_member }})
                    </h2>
                    <h2 class="text-secondary">
                        <i class="fa fa-female" aria-hidden="true"></i>
                        Femmes
                        ({{ $total_female_member }})
                    </h2>
                </div>
            </div>
        </div>
    </div>
</dibv>
