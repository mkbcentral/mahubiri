@php
    $memberFunctions = App\Models\MemberFunction::all();
@endphp
<div class="form-group">
    <select class="form-control" {{ $attributes }}>
        <option>Choisir...</option>
        @foreach ($memberFunctions as $memberFunction)
            <option value="{{ $memberFunction->id }}">{{ $memberFunction->name }}</option>
        @endforeach
    </select>
</div>
