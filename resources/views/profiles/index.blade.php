@extends('components.master')

@section('main')

    <div class="w3-container">
        <h2 class="w3-center">Profiles</h2>
        <table class="w3-table-all">
            <thead>
                <tr class="w3-light-grey">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Bio</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($profiles as $profile)
                <tr>
                    <td>{{$profile->id}}</td>
                    <td>{{$profile->name}}</td>
                    <td>{{$profile->email}}</td>
                    <td>{{Str::limit($profile->bio, 50,'')}}</td>
                    <td>
                        <a href='/profiles/{{$profile->id}}' class="w3-button w3-blue">See</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
