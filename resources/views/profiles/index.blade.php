@extends('components.master')

@section('main')
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold text-center mb-6">Profiles</h2>
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr class="bg-gray-100">
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Name</th>
                    <th class="py-2 px-4 border-b">Email</th>
                    <th class="py-2 px-4 border-b">Bio</th>
                    <th class="py-2 px-4 border-b">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($profiles as $profile)
                <tr class="hover:bg-gray-50">
                    <td class="py-2 px-4 border-b text-center">{{$profile->id}}</td>
                    <td class="py-2 px-4 border-b text-center">{{$profile->name}}</td>
                    <td class="py-2 px-4 border-b text-center">{{$profile->email}}</td>
                    <td class="py-2 px-4 border-b text-center">{{Str::limit($profile->bio, 50,'')}}</td>
                    <td class="py-2 px-4 border-b text-center">
                        <a href='/profiles/{{$profile->id}}' class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">See</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination Styling with Tailwind CSS -->
        <div class="mt-6 flex justify-center">
            {{$profiles->links('pagination::tailwind')}}
        </div>
    </div>
@endsection
