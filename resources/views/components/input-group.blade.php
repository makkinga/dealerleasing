<div class="flex items-center flex-wrap sm:flex-nowrap">
    <div class="label mb-2 sm:w-4/12">
        {{ $label }}
        @if(isset($instructions))
            <div class="instructions">{{ $instructions }}</div>
        @endif
    </div>
    <div class="w-full">
        {{ $slot }}
        @isset($model)
            @error($model)
                <div class="ml-2 mt-1 text-xs text-red-500">{{ $message }}</div>
            @enderror
        @endisset
    </div>
</div>
