@if ($errors->has($name))
    <span class="text-red-500 text-sm">{{ $errors->first($name) }}</span>
@endif