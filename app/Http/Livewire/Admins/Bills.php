<?php

namespace App\Http\Livewire\Admins;
use App\Models\bill;
use App\Models\user;
use Livewire\Component;
use Livewire\WithPagination;

class Bills extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $users_id;
    public $amount;
    public $payed;
    public $edit_bill_id;
    public $button_text = "Add New Bill";

    public function add_bill()
    {
        if ($this->edit_bill_id) {

            $this->update($this->edit_bill_id);

        }else{

           $this->validate([
            'users_id' => 'required',
            'amount' => 'required|numeric',
            ]);

            bill::create([
                'users_id'         => $this->users_id,
                'amount'         => $this->amount,
                'payed'         => $this->payed,
            ]);

           $this->amount=null;
            $this->users_id=null;
            $this->payed=null;

            session()->flash('message', 'Bill Created successfully.');
        }

    }


     public function edit($id)
    {
        $bill = bill::findOrFail($id);
        $this->edit_bill_id = $id;
        $this->amount = $bill->amount;
        $this->users_id = $bill->users_id;
        $this->payed = $bill->payed;

        $this->button_text="Update Bill";
    }

    public function update($id)
    {
        $this->validate([
            'amount' => 'required|numeric',
            'users_id' => 'required|numeric',
            ]);

        $bill = bill::findOrFail($id);
        $bill->amount = $this->amount;
        $bill->users_id = $this->users_id;
        $bill->payed = $this->payed;

        $bill->save();

        $this->amount=null;
        $this->users_id=null;
        $this->payed=null;

        $this->edit_bill_id=null;

        session()->flash('message', 'Bill Updated Successfully.');

        $this->button_text = "Add New Bill";

}

     public function delete($id)
    {
        bill::findOrFail($id)->delete();
        session()->flash('message', 'Bill Deleted Successfully.');

        $this->amount=null;
        $this->users_id=null;
        $this->payed=null;
        $this->discharge_time=null;
}
    public function render()
    {
        return view('livewire.admins.bills',[
            'bills' =>bill::latest()->paginate(10),
            'users' =>user::all()
        ])->layout('admins.layouts.app');
    }
}
