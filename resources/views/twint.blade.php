<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Twint') }}
        </h2>
    </x-slot>
    
    <div class="grid grid-rows-2 grid-flow-col gap-4 mt-5">
        <div class="max-w-screen-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row-span-3 col-span-1">
                <div class="px-4 sm:px-0">
                    @include('twint.sidebar')                
                </div>
            </div>
        </div>
        <div class="row-span-3 col-span-3">
             @include('twint.panel')
        </div>
    </div>
</x-app-layout>