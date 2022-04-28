<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Twint') }}
        </h2>
    </x-slot>
    <div class="grid grid-rows-2 grid-flow-col gap-4 mt-5" id="twint">
        <div class="row-span-3 col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Aqui ira el side bar</h3>
            </div>
        </div>

        <div class="row-span-3 col-span-3">
                @include('twint.panel')
        </div>
    </div>
</x-app-layout>