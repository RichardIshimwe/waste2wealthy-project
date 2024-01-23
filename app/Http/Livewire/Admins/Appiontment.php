<?php

namespace App\Http\Livewire\Admins;

use App\Models\appointment;
use App\Models\company;
use App\Models\users;
use Livewire\Component;

class Appiontment extends Component
{

    public $start_timeee;
    public $endtime;

    public $edit_appointment_id;
    public $button_text = "Add New Appointment";



    public function add_appointment()
    {
        if ($this->edit_appointment_id) {

            $this->update($this->edit_appointment_id);

        }else{
            $this->validate([
                'user' => 'required|numeric',
                'station' => 'required|numeric',
                'email' => 'required|numeric',
                ]);
            appointment::create([
                'company_id'         => $this->company,
                'user_id'           => $this->users,
                'intime ' => $this->start_timeee,
                'outtime ' => $this->endtime,
            ]);
            //unset variables
            $this->user="";
            $this->comapny="";
            $this->station="";
            $this->start_timeee="";
            $this->endtime="";
            session()->flash('message', 'Appointment Created successfully.');
        }

    }

     public function edit($id)
    {
        $appointment = appointment::findOrFail($id);
        $this->edit_appointment_id = $id;
        $this->user = $appointment->user_id;
        $this->station = $appointment->station_id;
        $this->start_timeee = $appointment->intime;
        $this->endtime = $appointment->outtime;

        $this->button_text="Update Appointment";
    }
    public function update($id)
    {
        $this->validate([
                'user' => 'required|numeric',
                'comapny' => 'required|numeric',
                'station' => 'required|numeric',
            ]);

        $appointment = appointment::findOrFail($id);
        $appointment->user_id = $this->user;
        $appointment->comapny_id = $this->comapny;
        $appointment->station_id = $this->station;
        $appointment->intime = $this->start_timeee;
        $appointment->outtime = $this->endtime;

        $appointment->save();

        $this->user="";
        $this->comapny="";
        $this->station="";
        $this->start_timeee="";
        $this->endtime="";

        session()->flash('message', 'Appointment Updated Successfully.');

        $this->button_text = "Add New Appointment";

}

     public function delete($id)
    {
        appointment::find($id)->delete();
        session()->flash('message', 'Appointment Deleted Successfully.');
    }


    public function render()
    {
        return view('livewire.admins.appiontment',[
            'appointments'=> appointment::all(),
        ])->layout('admins.layouts.app');
    }
}
