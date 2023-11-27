<div>
    <div x-on:click="activeStep = {{ $step }}" class="px-4 py-6 rounded flex justify-between items-center" :class="activeStep == {{$step}} ? 'bg-white font-bold' : ''">
        <div>{{ $step }}. {{ $heading }}</div>
        <div x-show="activeStep != {{ $step }}">
            <svg class="w-8 h-8 fill-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"/>
            </svg>
        </div>
        <div x-show="activeStep == {{ $step }}">
            <svg class="w-8 h-8 fill-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M7.41,15.41L12,10.83L16.59,15.41L18,14L12,8L6,14L7.41,15.41Z"/>
            </svg>
        </div>
    </div>
    <div x-show="activeStep == {{ $step }}" class="px-4 py-6">
        {{ $slot }}
    </div>
</div>
