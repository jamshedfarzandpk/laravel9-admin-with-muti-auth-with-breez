<x-admin-layout>
    <x-slot name="header">
        {{ __('User Roles') }}
    </x-slot>
    <div class="clearfix">
        <a href="{{route('admin.roles.create')}}">
        <button type="button"  style="float:right"  class="float-right btn btn-primary"><i class="fe fe-plus me-2"></i>Add New Role</button>
        </a>
    </div>

    <livewire:role-table />
</x-admin-layout>
