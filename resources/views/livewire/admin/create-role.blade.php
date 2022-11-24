<div>
    <form action="submit" method="POST" wire:submit.prevent="create">
        <x-admin.components.input.group label="Role Name" for="name" :error="$errors->first('role.name')">
            <x-admin.components.input.text wire:model.defer="role.name" name="name" id="name" :error="$errors->first('role.name')" placeholder="Enter Role" />
        </x-admin.components.input.group>
        
        <x-admin.components.input.group label="Guard Name" for="guard_name" :error="$errors->first('role.guard_name')">
            <x-admin.components.input.select id="guard_name" wire:model.defer="role.guard_name">
                <option value="" disabled>Choose Guard
                </option>
                <option value="web">Web</option>
                <option value="admin">Admin</option>
            </x-admin.components.input.select>
        </x-admin.components.input.group>
                
        <button type="submit" class="mt-4 mb-0 btn btn-primary bg-success-gradient notice1" >Submit</button>
    </form>
</div>
