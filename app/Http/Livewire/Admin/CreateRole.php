<?php

namespace App\Http\Livewire\Admin;

use App\Models\Role;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class CreateRole extends Component
{
    public $role;

    public function mount()
    {
        $this->role = new Role();
    }

    protected function rules()
    {
        return [
            'role.name' => 'required|string|max:30|unique:'.get_class($this->role).',name',
            'role.guard_name' => 'required|string',
        ];
    }

    public function render()
    {
        return view('livewire.admin.create-role');
    }

    public function create(): Redirector
    {
        $this->validate();

        $this->role->save();
        Session::flash('message', 'Role Added Succefully!');

        return redirect()->route('admin.roles.index');

        //notify()->success('Welcome to Laravel Notify ⚡️', 'My custom title');

        //$this->notify(trans('notifications.role.created'), 'admin.roles.index');
    }
}
