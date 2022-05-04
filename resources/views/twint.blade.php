<x-app-layout>
    
    <x-slot name="header" >
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
            {{ __('Twint') }}
        </h2>
    </x-slot>
    
    
        <!-- <div class="max-w-screen-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row-span-3 col-span-1"> -->
                <div class="float-left pt-5">
                    @include('twint.sidebar')                
                </div>
            <!-- </div>
        </div> -->
        <div class="pt-5">
             @include('twint.panel')
        </div>
    
</x-app-layout>