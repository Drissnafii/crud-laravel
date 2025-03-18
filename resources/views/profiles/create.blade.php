@extends('components.master')

@section('main')

<form method="POST" action="/profile/store"  class="w3-container w3-center" style="margin-top: 50px;">
    {{-- Errors popup div  --}}
    {{-- <div class="w3-container w3-padding">
        @if ($errors->any())
            <div class="w3-panel w3-border w3-round-large w3-padding"
                 style="width: 50%; margin: 0 auto; background-color: #8B0000; color: white;">
                <h4 class="w3-text-white">Please review the following errors:</h4>
                <ul class="w3-ul">
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div> --}}
    {{-- End Errors popup div  --}}
    <x-error-list/>


    @csrf
    <h2 class="w3-text-blue">Créer Un Profile</h2>

    <!-- Name Input -->
    <div class="w3-card w3-padding w3-round w3-margin-top" style="max-width: 400px; margin: 0 auto;">
        <label for="name" class="w3-text">Nom complet</label>
        <input type="text" id="name" name="name" class="w3-input w3-border w3-round" style="text-align: center;">

        @error('name')
        <span class="w3-text-red" style="font-size: 14px; font-weight: bold; display: block; margin-top: 5px;">
            {{ $message }}
        </span>
        @enderror
    </div>


    <!-- Email Input -->
    <div class="w3-card w3-padding w3-round w3-margin-top" style="max-width: 400px; margin: 0 auto;">
        <label for="email" class="w3-text">Email</label>
        <input type="text" id="email" name="email" class="w3-input w3-border w3-round" style="text-align: center;">

        @error('email')
        <span class="w3-text-red" style="font-size: 14px; font-weight: bold; display: block; margin-top: 5px;">
            {{ $message }}
        </span>
        @enderror

    </div>

    <!-- Password Input -->
    <div class="w3-card w3-padding w3-round w3-margin-top" style="max-width: 400px; margin: 0 auto;">
        <label for="password" class="w3-text">Password</label>
        <input type="password" id="password" name="password" class="w3-input w3-border w3-round" style="text-align: center;">
    </div>

    <!-- Bio Input -->
    <div class="w3-card w3-padding w3-round w3-margin-top" style="max-width: 400px; margin: 0 auto;">
        <label for="bio" class="w3-text">Bio</label>
        <textarea id="bio" name="bio" class="w3-input w3-border w3-round" style="text-align: center;"></textarea>
    </div>

    <!-- Submit Button -->
    <button class="w3-button w3-blue w3-round w3-margin-top" style="max-width: 400px; width: 100%; margin: 20px auto;" type="submit">Ajouter</button>
</form>

@endsection
