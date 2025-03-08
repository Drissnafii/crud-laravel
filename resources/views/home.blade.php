<x-master>

@section('main')

    {{-- || Alert component ||--}}
    <x-alert type='warning'>
        <h3> Helloooow </h3> Walikuum salam
    </x-alert>

    <x-alert type='success'>
        <h3> Helloooow </h3> Walikuum salam
    </x-alert>

    <x-alert type='bg-info'>
        <h3> Helloooow </h3> Walikuum salam
    </x-alert>

<h1>Home Page</h1>

<x-users-table :users=$users/>
@endsection

</x-master>
