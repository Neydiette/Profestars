<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Laravel\Jetstream\Rules\Role;
use Livewire\Component;
use Spatie\Permission\Models\Role as ModelsRole;

class GestionUsers extends Component
{
    public $users, $name, $email, $password, $role, $user_id;
    public $roles;
    public $openDeleteModal;
    public $selectedUser;
    public $isOpen;

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
        $this->openDeleteModal = false;
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->role = '';
        $this->user_id = '';
        $this->selectedUser = '';
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'role' => 'required'
        ]);

        if ($this->user_id) {
            $user = User::find($this->user_id);
            $user->name = $this->name;
            $user->email = $this->email;
            if ($this->password) {
                $user->password = Hash::make($this->password);
            }
            $user->save();
        } else {
            $this->validate(['password' => 'required']);
            $user = User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password)
            ]);
        }

        $user->syncRoles($this->role);

        session()->flash(
            'message',
            $this->user_id ? 'Usuario actualizado exitosamente.' : 'Usuario creado exitosamente.'
        );

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $this->user_id = $id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->role = $user->roles->pluck('name')->toArray();

        $this->openModal();
    }

    public function confirmDelete($id)
    {
        $this->selectedUser = $id;
        $this->openDeleteModal = true;
    }
    public function delete()
    {
        User::find($this->selectedUser)->delete();
        $this->closeModal();
    }
    public function render()
    {
        $this->users = User::with('roles')->where('email', '!=', 'admin@example.com')->get();
        $this->roles = ModelsRole::all();
        return view('livewire.gestion-users');
    }
}
