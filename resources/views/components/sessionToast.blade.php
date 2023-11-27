@if (session($message))
    <div x-data="{ sessionToast: true }" x-show="sessionToast" class="rounded bg-primary fixed right-4 bottom-4 font-bold text-white">
        <div x-on:click="sessionToast = false" class="p-2">
            <svg class="w-5 h-5 fill-white cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z"/>
            </svg>
        </div>
        <div class="p-6 pt-0">
            {{ session($message) }}
        </div>
    </div>
@endif
