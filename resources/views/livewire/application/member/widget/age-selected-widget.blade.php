<div>
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
        <label wire:click='initMaxAge' class="btn btn-sm {{ $maxAge == 0 ? ' btn-danger ' : 'btn-secondary' }}">
            <input type="radio" name="options" id="option_a1" autocomplete="off" checked="">
            Tout
        </label>
        <div class="clearfix">
            <div class="float-left">

            </div>
            <div class="float-right">

            </div>
        </div> <label class="btn  btn-sm {{ $isMax == true ? 'btn-danger' : 'btn-secondary' }}" wire:click='makeIsMax'>
            <input type="radio" name="options" id="option_a2" autocomplete="off">
            Majeur
        </label>
        <label class="btn  btn-sm {{ $isMin == true ? 'btn-danger' : 'btn-secondary' }}" wire:click='makeIsMin'>
            <input type="radio" name="options" id="option_a3" autocomplete="off">
            Mineur
        </label>
    </div>
</div>
