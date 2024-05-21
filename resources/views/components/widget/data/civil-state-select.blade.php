@php
    $civilStates = App\Models\CivilState::all();
@endphp
<div class="form-group">
    <select class="form-control" {{ $attributes }}>
        <option>Choisir...</option>
        @foreach ($civilStates as $civilState)
            <option value="{{ $civilState->id }}">{{ $civilState->name }}</option>
        @endforeach
    </select>
</div>
