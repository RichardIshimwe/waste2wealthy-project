<div>
    <div class="content">
        <div class="container">
            <div class="page-title">
                <h3 class="text-info">{{ env('APP_NAME') }}  Requested Appointments</h3>
            </div>
            <div  >
                @if (session()->has('message'))
                <div class="alert alert-success"  >
                    {{ session('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                </div>
                @endif
            </div>
            <div class="box box-primary" >
                <div class="box-body">
                    <div class="text-info" wire:loading>Loading..</div>
                    <br><hr>
                    <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded" >{{ _("All  Requtested Appointments") }}</div>
                    <table width="100%" class="table table-hover"   id="">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Location</th>
                                <th>Company stage</th>
                                <th>Address</th>
                                <th>electricity per month</th>
                                <th>Photo</th>
                                <th>Dated</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($all_requested_appointment as $request)
                                <tr>
                                    <td>{{ $company->name }}</td>
                                    <td>{{ $company->email }}</td>
                                    <td>{{ $company->Location ? : 'Null' }}</td>
                                    <td>{{ $company->photo ? : 'Null' }}</td>
                                    <td>{{ $company->address ? : 'Null' }}</td>
                                    <td>{{ $company->companyStage ? : 'Null' }}</td>
                                    <td class="text-right">

                                        <button wire:click="add_user({{ $request->id }})" title="add as a user" class="btn btn-outline-info btn-rounded"><i class="fas fa-plus"></i></button>

                                        <button  title="delete request" onclick="return confirm('Are You Sure ?')" wire:click="delete({{ $request->id }})" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                            @empty
                            <td class="text-warning">{{ __('Null') }}</td>
                            <td class="text-warning">{{ __('Null') }}</td>
                            <td class="text-warning">{{ __('Null') }}</td>
                            <td class="text-warning">{{ __('Null') }}</td>
                            <td class="text-warning">{{ __('Null') }}</td>
                            <td class="text-warning">{{ __('Null') }}</td>
                            <td class="text-warning">{{ __('Null') }}</td>
                            <td class="text-warning">{{ __('Null') }}</td>
                        </tr>
                            @endforelse
                            </tbody>
                    </table>
                    {{ $all_requested_appointment->links() }}
                </div>
     </div>
</div>
