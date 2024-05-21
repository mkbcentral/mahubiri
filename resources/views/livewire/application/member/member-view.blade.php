<div>
    <x-navigation.bread-crumb icon='fa fa-users' label='MEMBRES' color='text-secondary'>
        <x-navigation.bread-crumb-item label='Membres' />
        <x-navigation.bread-crumb-item label='Dasnboard' isLinked=true link="dashboard" />
    </x-navigation.bread-crumb>
    <x-content.main-content-page>
        <div class="card card-outline card-indigo p-4">
            <div class="d-flex justify-content-between align-content-center">
                <div class="d-flex">
                    <span class="mr-2"><x-form.search-input wire:model.live='q' /></span>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label wire:click='initMaxAge'
                            class="btn btn-sm {{ $maxAge == 0 ? ' btn-danger ' : 'btn-secondary' }}">
                            <input type="radio" name="options" id="option_a1" autocomplete="off" checked="">
                            Tout
                        </label>
                        <div class="clearfix">
                            <div class="float-left">

                            </div>
                            <div class="float-right">

                            </div>
                        </div> <label class="btn  btn-sm {{ $isMax == true ? 'btn-danger' : 'btn-secondary' }}"
                            wire:click='makeIsMax'>
                            <input type="radio" name="options" id="option_a2" autocomplete="off">
                            Majeur
                        </label>
                        <label class="btn  btn-sm {{ $isMin == true ? 'btn-danger' : 'btn-secondary' }}"
                            wire:click='makeIsMin'>
                            <input type="radio" name="options" id="option_a3" autocomplete="off">
                            Mineur
                        </label>
                    </div>
                </div>
                <x-form.link-button icon="fa fa-plus-circle" textLabel="Créer..." class="btn-info" link="member.form" />
            </div>
            <div class="d-flex justify-content-center">
                <div wire:loading class="spinner"></div>
            </div>
            <table wire:loading.class='d-none' class="table table-striped table-sm mt-2">
                <thead class="bg-indigo">
                    <tr class="cursor-hand">
                        <th>#</th>
                        <th wire:click="sortMember('name')">
                            Membre
                            <x-form.sort-icon sortField="name" :sortAsc="$sortAsc" :sortBy="$sortBy" />
                        </th>
                        <th class="text-center" wire:click="sortMember('civility')">
                            Genre
                            <x-form.sort-icon sortField="civility" :sortAsc="$sortAsc" :sortBy="$sortBy" />
                        </th>
                        <th class="text-center" wire:click="sortMember('birthdate')">
                            Age
                            <x-form.sort-icon sortField="birthdate" :sortAsc="$sortAsc" :sortBy="$sortBy" />
                        </th>
                        <th>Phone</th>
                        <th>CATEGORIE</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($members as $index => $member)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td class="text-uppercase">{{ $member->name }}</td>
                            <td class="text-center">{{ $member->civility }}</td>
                            <td class="text-center">
                                {{ $member->age >= 1 ? $member->age . ' Ans' : $member->age . ' An' }}</td>
                            <td>{{ $member->phone }}</td>
                            <td>{{ $member->memberFunction->name }}</td>
                            <td class="text-center">
                                <x-form.button-group-link>
                                    <x-form.link-group href="{{ route('member.form', [$member]) }}" label="Editer"
                                        icon="fa fa-pen" class="text-indigo" />
                                    <x-form.link-group href="#" wire:confirm="Etês-vous sûre de supprimer ?"
                                        wire:click='delete({{ $member }})' label="Supprimer" icon="fa fa-trash"
                                        class="text-secondary" />
                                </x-form.button-group-link>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4 d-flex justify-content-between align-items-center items-center">
                <span>{{ $members->links('livewire::bootstrap') }}</span>
                <div class="d-flex align-items-center">
                    <span>Nbre/page</span>
                    <select class="form-control w-20 ml-2" wire:model.live='perPage'>
                        @for ($i = 10; $i <= 300; $i += 20)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                </div>
            </div>
        </div>
    </x-content.main-content-page>
</div>
