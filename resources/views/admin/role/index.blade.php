<x-admin-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('User Roles') }}
        </h2>
    </x-slot>
    <livewire:role-table/>
</x-admin-layout>
