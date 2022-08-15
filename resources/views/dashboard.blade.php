<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @include('main.meta.alert')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-2  ">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    @livewire('admin.product-create')

                </div>

            </div>

        </div>
    </div>
</x-app-layout>
