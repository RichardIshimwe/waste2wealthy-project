<?php

namespace App\Http\Livewire\Admins;

use Livewire\Component;
use App\Models\requestedAppointment;
use App\Models\user;
use Livewire\WithPagination;

class RequestedAppointments extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function add_user($id)
    {
        $request = requestedAppointment::find($id);
        user::create([
                'name'          => $request->name,
                'email'         => $request->email,
                'phone'         => $request->phone,
                'address'       => $request->address,
        ]);
        session()->flash('message', 'user Added Successfully.');
    }

     public function delete($id)
    {
        $user = requestedAppointment::find($id)->delete();
        session()->flash('message', 'Appointment Deleted Successfully.');
    }
    public function render()
    {
        return view('livewire.admins.requested-appointments',[
            'all_requested_appointment' => requestedAppointment::latest()->paginate(1)
        ])->layout('admins.layouts.app');
    }
}
