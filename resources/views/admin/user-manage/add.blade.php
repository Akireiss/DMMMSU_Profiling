@extends('layouts.admin.index')
@section('content')
    <section class="section">
        <x-alert />
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title">
                            Add new user
                        </h5>

                        <form class="row g-3 needs-validation" action="{{ url('admin/user/store') }}" method="POST">
                            @csrf

                            <x-col col="6">
                                <x-label>Fullname</x-label>
                                <x-input type="text" name="fullname" />
                                <x-validation />
                            </x-col>

                            <x-col col="6">
                                <x-label>Username</x-label>

                                <x-input type="text" name="username" />
                                <x-validation />
                            </x-col>

                            <x-col col="6">
                                <x-label>Password</x-label>

                                <x-input type="password" id="password" name="password">
                                    <input type="checkbox" onclick="myFunction()">Show Password
                                </x-input>
                                <x-validation />
                            </x-col>

                            <x-col col="6">
                                <x-label>Repeat Password</x-label>

                                <x-input type="password" id="repeat-password" name="repeat-password" />

                                <input type="checkbox" onclick="myFunction()">Show Password
                                <x-validation />
                            </x-col>

                            <x-col col="6">
                                <x-label>Role</x-label>

                                <div class="col-sm-12">
                                    <x-select name="user_role_id">
                                        @foreach ($usertype as $user)
                                            <option value="{{ $user->id }}">{{ $user->user_type }}</option>
                                        @endforeach
                                    </x-select>
                                    <x-validation />
                                </div>
                            </x-col>

                            <x-col col="6">
                                <x-label>Status</x-label>
                                <div class="col-sm-12">
                                    <x-select name="user_status">
                                        <option value="0">Active</option>
                                        <option value="1">Inactive</option>
                                    </x-select>
                                    <x-validation />
                                </div>
                            </x-col>

                            <x-col col="12">
                                <x-button type="submit">Save User</x-button>
                                <x-button type="reset">Reset</x-button>
                            </x-col>
                        </form>

                    </div>
                </div>

            </div>
        </div> <!-- Add the closing </div> tag here -->

    </section>
@endsection
