<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('APP_NAME') }}</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="bg-gray-100">
<header class="p-6">
    <span class="text-4xl font-black italic text-primary">ACME</span>
</header>
<main>
    <div class="container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="lg:col-span-2">
                {{ $slot }}
            </div>

            <div class="h-fit grid grid-cols-1 gap-4">
                <div class="card grid grid-cols-1 gap-4">
                    <div class="flex justify-between items-center">
                        <div class="label">{{ __('Voortgang') }}</div>
                        <div class="label">2/5</div>
                    </div>
                    <div class="grid grid-cols-5 gap-1">
                        @for($i = 1; $i <= 5; $i++)
                            <div class="w-full h-2 rounded-sm {{ $i <= 2 ? 'bg-primary' : 'bg-gray-200' }}"></div>
                        @endfor
                    </div>
                </div>

                <div x-data="{ expanded: true }" class="card">
                    <div x-on:click="expanded = ! expanded" class="flex justify-between">
                        <h3>{{ __('De verzekering') }}</h3>

                        <span x-show="! expanded">
                    <svg class="w-8 h-8 fill-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"/></svg>
                </span>
                        <span x-show="expanded">
                    <svg class="w-8 h-8 fill-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M7.41,15.41L12,10.83L16.59,15.41L18,14L12,8L6,14L7.41,15.41Z"/></svg>
                </span>
                    </div>

                    <div x-show="expanded" class="mt-4 grid grid-cols-1 divide-y divide-gray-100">
                        <div class="py-4 text-xs">
                            <div class="mb-2 font-bold flex justify-between items-center">
                                <div>{{ __('Beroepsaansprakelijkheid') }}</div>
                                <div>€450,00</div>
                            </div>
                            <div class="mb-1 text-xs text-gray-400">{{ __('€ 500.000 per aanspraak en per verzekeringsjaar') }}</div>
                            <div class="text-xs text-gray-400">{{ __('€ 500 eigen risico per aanspraak') }}</div>
                        </div>
                        <div class="py-4 text-xs">
                            <div class="font-bold flex justify-between items-center">
                                <div>{{ __('Aanvullende dekkingen') }}</div>
                                <div>€0,00</div>
                            </div>
                        </div>
                        <div class="py-4 text-xs">
                            <div class="flex justify-between items-center">
                                <div class="font-bold">{{ __('Totaal') }}</div>
                                <div class="text-xl">€450,00</div>
                            </div>
                        </div>
                        <div class="py-4 text-xs">
                            <div class="text-xs text-gray-400">{{ __('excl. 21% assurantiebelasting') }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@livewireScripts
</body>
</html>
