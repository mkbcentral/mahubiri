@php
    $civilities = App\Models\Civility::all();
@endphp
<div>
    <select class="form-control @error($error) is-invalid @enderror" {{ $attributes }}>
        <option>Choisir...</option>
        @foreach ($civilities as $civility)
            <option value="{{ $civility->slug }}">{{ $civility->name }}</option>
        @endforeach
    </select>
</div>
