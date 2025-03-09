@extends('components.master')

@section('main')
{{-- @section('title')
Profile - {{$profile->name}}
@endsection --}}


    <title>Profile - {{$profile->name}}</title>
<!-- Profile Container -->
<!-- Profile Container -->
<div class="w3-container w3-padding-64">
    <div class="w3-card-4 w3-margin w3-white w3-center">
        <header class="w3-container w3-teal">
            <h2 class="w3-margin-bottom"><i class="fa fa-user"></i> Profile</h2>
        </header>

        <div class="w3-container w3-padding">
            <div class="w3-row-padding">
                <div class="w3-col m12">
                    <div class="w3-card w3-padding w3-margin-bottom">
                        <h3 class="w3-text-grey">Name</h3>
                        <p class="w3-large">{{$profile->name}}</p>
                    </div>
                </div>

                <div class="w3-col m12">
                    <div class="w3-card w3-padding w3-margin-bottom">
                        <h3 class="w3-text-grey">ID</h3>
                        <p class="w3-large">{{$profile->id}}</p>
                    </div>
                </div>

                <div class="w3-col m12">
                    <div class="w3-card w3-padding w3-margin-bottom">
                        <h3 class="w3-text-grey">Bio</h3>
                        <p class="w3-large">{{$profile->bio}}</p>
                    </div>
                </div>

                <div class="w3-col m12">
                    <div class="w3-card w3-padding w3-margin-bottom">
                        <h3 class="w3-text-grey">Password</h3>
                        <p class="w3-large">{{$profile->pass}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
