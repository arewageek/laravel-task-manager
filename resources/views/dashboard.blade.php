<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 w-full lg:w-2/5 mx-auto">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <livewire:tasks-highlight />
            <livewire:all-tasks />
        </div>
    </div>
</x-app-layout>
