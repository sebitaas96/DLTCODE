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
        <div class="row-span-3 col-span-3 shadow sm:rounded-md sm:overflow-hidden bg-gray-500">
            <table class="w-full table-auto" style="border-radius: 50px 0 50px 0 / 100px 0 100px 0">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">Hash</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">Fecha</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">&nbsp;</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-200">
                    @foreach($datas as $data)
                    <tr class="hover:bg-gray-400">
                        <td class="p-3 text-sm text-gray-700">{{$data[0][0]}} </td>
                        <td class="p-3 text-sm text-gray-700">{{ $data[0][1]}}</td>
                        <td class="p-3 text-sm text-gray-700"><a class="font-bold text-blue-500 underline hover:bg-yellow-200 p-2 rounded-lg" href="{{route('twint.data.show', $data[1])}}">View</a></td>
                    </tr>
                    @endforeach
                </tbody>
        </div>
    </div>
</x-app-layout>