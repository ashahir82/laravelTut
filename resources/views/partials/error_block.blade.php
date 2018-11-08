@if ($errors->has($item))
    <span>
        <strong>
            {{ $errors->first($item) }}
        </strong>
    </span>
@endif