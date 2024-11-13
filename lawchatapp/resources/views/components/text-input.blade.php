<div>
    <input 
        type="text" 
        name="{{ $name }}" 
        id="{{ $id }}" 
        value="{{ $value }}" 
        {{ $attributes->merge(['class' => 'form-input']) }} 
    />

    {{-- Display Validation Error for the Input --}}
    @if ($errors->has($name))
        <span class="text-red-500 text-sm">{{ $errors->first($name) }}</span>
    @endif
</div>
