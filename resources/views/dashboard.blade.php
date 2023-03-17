<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-4">
            <div class="overflow-hidden sm:rounded-lg p-5">
                {{-- <x-jet-welcome /> --}}
                <livewire:db />

            </div>
        </div>
    </div>
</x-app-layout>
