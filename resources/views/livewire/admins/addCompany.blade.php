<div>
    <div class="content">
        <div class="container">
            <div class="page-title">
                <h3 class="text-info">{{ env('APP_NAME') }}  company</h3>
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
                    <form accept-charset="utf-8" class="shadow rounded p-3" wire:submit.prevent="add_company()">
                    <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded" >{{ __("Add New company") }}</div>
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" name="Name" wire:model.lazy="name"  placeholder="Enter Name" class="form-control"   />
                        @error('name') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="Email" name="Email" wire:model.lazy="email"  placeholder="Enter Email" class="form-control"   />
                        @error('email') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Phone">Phone</label>
                        <input type="number" min="0" max="10000000000000" name="Phone" wire:model.lazy="phone"  placeholder="Enter Phone" class="form-control"   />
                        @error('phone') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Address">Address</label>
                        <input type="text" name="Address" wire:model.lazy="address"  placeholder="Enter Address" class="form-control"   />
                        @error('address') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="Department">Gender</label>
                        <select name="Department" wire:model.lazy="gender" class="form-control"  >
                         <option value="Male" class="text-red">{{ __("Male") }}</option>
                         <option value="Female" class="text-red">{{ __("Female") }}</option>
                        </select>
                        @error('Gender') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="number" min="1" max="130" name="age" wire:model.lazy="age"  placeholder="Enter age" class="form-control"   />
                        @error('age') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Blood">Company stage</label>
                        <select name="Blood" wire:model.lazy="companyStage" class="form-control"  >
                         <option value="Null" class="text-red">Null</option>
                         <option value="Startup Stage" class="text-red">Startup Stage</option>
                         <option value="Early Stage" class="text-red">Early Stage</option>
                         <option value="Growth Stage" class="text-red">Growth Stage</option>
                         <option value="Expansion Stage" class="text-red">Expansion Stage</option>
                         <option value="Maturity Stage" class="text-red">Maturity Stage</option>
                         <option value="Decline Stage" class="text-red">Decline Stage</option>
                        </select>
                        @error('Gender') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group ">
                        <label class="form-check-label mr-3">
                            Company Type
                            </label><br>
                        <div class="form-inline">
                            <div class="form-check mx-3">
                                <input class="form-check-input" wire:model="indoor" type="radio" name="rad" id="rad1" value="indoor">
                                <label class="form-check-label" for="rad1">
                                NGO
                                </label>
                            </div>
                            <div class="form-check mx-3">
                                <input class="form-check-input" wire:model="outdoor" type="radio" name="rad" id="rad2" value="outdoor">
                                <label class="form-check-label" for="rad2">
                                    Profit based company
                                </label>
                            </div>
                        </div>
                    </div>
                    {{-- @if ($indoor) --}}
                    {{-- <h1>out door is on</h1> --}}
                    {{-- @endif --}}
                    {{-- @if ($indoor) --}}
                    <div class="form-group"  x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false"  x-on:livewire-upload-progress="progress = $event.detail.progress">
                        <label class="form-control-label">Photo</label>
                        <div class="custom-file">
                            <input type="file" name="Photo" wire:model.lazy="photo" class="custom-file-input ">
                            <label class="custom-file-label">{{ __('Choose Photo') }}</label>
                        </div>
                        @error('photo') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror <br>

                        <div x-show="isUploading" style="width: 100%">
                            <progress class="my-1 progress-bar" role="progressbar" max="100" x-bind:value="progress"></progress>
                        </div>
                        <small class="text-muted">{{ __('The photo must have 0x0 size') }}</small><br>
                        <br>
                        <div wire:loading wire:target="photo">{{ __('Uploading...') }}</div><br>

                        @if ($photo)
                        {{ __('Photo Preview:') }}<br>
                            <img width="20%" height="20%" src="{{ $photo->temporaryUrl() }}">
                        @endif
                        @if ($edit_photo)
                        <br>
                        {{ __('Old Photo Preview:') }}<br>
                            <img width="20%" height="20%" src="{{ env('APP_URL').'storage/'.$edit_photo }}">
                        @endif


                    </div>
                    {{-- @endif --}}

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="{{ $button_text }}">
                        </div>
                    </form><br><hr>
                    <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded" >{{ _("All  company") }}</div>
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
                            @forelse ($company as $company)
                                <tr>
                                    <td>{{ $company->name }}</td>
                                    <td>{{ $company->email }}</td>
                                    <td>{{ $company->Location ? : 'Null' }}</td>
                                    <td>{{ $company->photo ? : 'Null' }}</td>
                                    <td>{{ $company->address ? : 'Null' }}</td>
                                    <td>{{ $company->companyStage ? : 'Null' }}</td>
                                    <td><img width="100%" height="70px" src="{{(env('APP_URL').'storage/'. $company->photo_path)  ? : config('app.url').'images/company.png'  }}" alt="No Image"></td>
                                    <td>{{ $company->created_at }}</td>
                                    <td class="text-right">
                                        <button wire:click="edit({{ $company->id }})" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                        <button wire:click="delete({{ $company->id }})" onclick="return confirm('{{ __('Are You Sure ?')  }}')" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
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
                            <td class="text-warning">{{ __('Null') }}</td>
                        </tr>
                            @endforelse
                            </tbody>
                    </table>
                    {{ $company->links() }}
                </div>
     </div>
</div>
