@extends('layouts.admin.index')
@section('content')


    <div class="card shadow-md p-5">
        <table class="table">
        <thead>
            <tr>
                <th scope="col">Fulname</th>
                <th scope="col">Username</th>
                <th scope="col">Role</th>
                <th scope="col">Status</th>
                <th scope="col">Manage</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user )


            <tr>
                <td>{{ $user->fullname }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->role->user_type }}</td>
           <td>     {{ $user->user_status == 0 ? 'Active' : 'Inactive' }}</td>

                <td class="inline">
                    <x-button class="btn-sm">View</x-button>
                </td>

                @empty
                <td>No Data Found</td>
                @endforelse
            </tr>
        </tbody>
    </table>
</div>

@endsection
